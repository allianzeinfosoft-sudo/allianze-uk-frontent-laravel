<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GeneralHelper
{
    protected static $runtimeCache = [];

    public function fetchImageUrl($imageId, $cacheMinutes = 60)
    {
        $cacheKey = "wp_media_{$imageId}";

        if (isset(self::$runtimeCache[$cacheKey])) {
            return self::$runtimeCache[$cacheKey];
        }

        return self::$runtimeCache[$cacheKey] = Cache::remember(
            $cacheKey,
            now()->addMinutes($cacheMinutes),
            function () use ($imageId) {

                $response = Http::timeout(10)
                    ->get(config('services.wordpress.url') . '/media/' . $imageId);

                $data = $response->json();

                return $data['source_url'] ?? null; // ✅ Correct field
            }
        );
    }

    public function fetchPageData($slug, $cacheMinutes = 60)
    {
        $cacheKey = "wp_page_{$slug}";
        if (isset(self::$runtimeCache[$cacheKey])) {
            return self::$runtimeCache[$cacheKey];
        }
        return self::$runtimeCache[$cacheKey] = Cache::remember($cacheKey, now()->addMinutes($cacheMinutes), function () use ($slug) {
            $response = Http::timeout(15)->get(config('services.wordpress.url') . '/pages/?slug=' . $slug);
            return $response->json();
        });
    }

    public function getCompanyData($slug)
    {
        return $this->fetchPageData($slug);
    }

    public function getFooterData($slug)
    {
        return $this->fetchPageData($slug);
    }
}