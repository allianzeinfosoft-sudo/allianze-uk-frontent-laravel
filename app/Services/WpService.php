<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WpService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.wordpress.url'), '/');
    }

    /**
     * Get WordPress Posts
     */
    public function posts($params = [], $cacheMinutes = 60)
    {
        $defaultParams = [
            'per_page' => 10,
            'page' => 1,
            '_embed' => 1,
        ];

        $query = array_merge($defaultParams, $params);

        $cacheKey = 'wp_posts_' . md5(json_encode($query));

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($query) {

            $response = Http::timeout(15)
                ->retry(2, 500)
                ->get($this->baseUrl . '/posts', $query);

            if (!$response->successful()) {
                return [];
            }

            return [
                'data' => $response->json(),
                'pagination' => [
                    'total' => $response->header('X-WP-Total'),
                    'total_pages' => $response->header('X-WP-TotalPages'),
                ]
            ];
        });
    }

    /**
     * Single Post
     */
    public function singlePost($id, $cacheMinutes = 60)
    {
        $cacheKey = "wp_post_{$id}";

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($id) {
            $response = Http::timeout(15)->get($this->baseUrl . "/posts/{$id}", [
                '_embed' => 1
            ]);

            return $response->successful() ? $response->json() : null;
        });
    }

    public function postBySlug($slug, $cacheMinutes = 60)
    {
        $cacheKey = "wp_post_slug_{$slug}";

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($slug) {
            $response = Http::timeout(15)->get($this->baseUrl . '/posts', [
                'slug' => $slug,
                '_embed' => 1
            ]);

            $data = $response->json();

            return $data[0] ?? null;
        });
    }

    public function categories($cacheMinutes = 60)
    {
        $cacheKey = 'wp_categories';

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () {
            return Http::timeout(15)->get($this->baseUrl . '/categories', [
                'per_page' => 100,
                '_fields' => 'id,count,description,link,name,slug,taxonomy,parent'
            ])->json();
        });
    }

    public function tags($cacheMinutes = 60)
    {
        $cacheKey = 'wp_tags';

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () {
            return Http::timeout(15)->get($this->baseUrl . '/tags', [
                'per_page' => 100,
                '_fields' => 'id,count,description,link,name,slug,taxonomy'
            ])->json();
        });
    }

    public function recentPosts($limit = 3, $cacheMinutes = 60)
    {
        $cacheKey = "wp_recent_posts_{$limit}";

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($limit) {
            return Http::timeout(15)->get($this->baseUrl . '/posts', [
                'per_page' => $limit,
                '_embed' => 1,
                '_fields' => 'id,date,slug,link,title,excerpt,featured_media,_links,_embedded'
            ])->json();
        });
    }

    public function searchPosts($keyword, $cacheMinutes = 30)
    {
        $cacheKey = 'wp_search_' . md5($keyword);

        return Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($keyword) {
            return Http::timeout(15)->get($this->baseUrl . '/posts', [
                'search' => $keyword,
                '_embed' => 1
            ])->json();
        });
    }
}
