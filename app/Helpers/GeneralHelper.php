<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeneralHelper
{
    
 public function fetchImageUrl($imageId)
    {
        $response = Http::get(env('WORDPRESS_API_URL') . '/media/' . $imageId);
        $data = $response->json();
        return $data['guid']['rendered'] ?? null;
    }

public function fetchPageData($slug)
    {
        $response = Http::get(env('WORDPRESS_API_URL') . '/pages/?slug=' . $slug);
        return $response->json();
    }

public function getCompanyData($slug)
    {
        $response = $this->fetchPageData($slug);
        return $response;
    }

public function getFooterData($slug)
    {
        $response = $this->fetchPageData($slug);
        return $response;
    }   

}