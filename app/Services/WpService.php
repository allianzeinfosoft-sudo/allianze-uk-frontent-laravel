<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WpService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = rtrim(env('WORDPRESS_API_URL'), '/');
    }

    /**
     * Get WordPress Posts
     */
    public function posts($params = [], $cacheMinutes = 5)
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
    public function singlePost($id)
    {
        $response = Http::get($this->baseUrl . "/posts/{$id}", [
            '_embed' => 1
        ]);

        return $response->successful() ? $response->json() : null;
    }

    public function postBySlug($slug)
    {
        $response = Http::get($this->baseUrl . '/posts', [
            'slug' => $slug,
            '_embed' => 1
        ]);

        $data = $response->json();

        return $data[0] ?? null;
    }

    public function categories()
    {
        return Http::get($this->baseUrl . '/categories', [
            'per_page' => 20
        ])->json();
    }

    public function tags()
    {
        return Http::get($this->baseUrl . '/tags', [
            'per_page' => 20
        ])->json();
    }

    public function recentPosts($limit = 3)
    {
        return Http::get($this->baseUrl . '/posts', [
            'per_page' => $limit,
            '_embed' => 1
        ])->json();
    }

    public function searchPosts($keyword)
    {
        return Http::get($this->baseUrl . '/posts', [
            'search' => $keyword,
            '_embed' => 1
        ])->json();
    }
}
