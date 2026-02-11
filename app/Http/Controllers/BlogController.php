<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WpService;
use App\Helpers\GeneralHelper;

class BlogController extends Controller
{
    //
    public function index(WpService $wp)
        {
            $postsResponse = $wp->posts([
            'per_page' => 6,
            'page' => request('page', 1)
        ]);
        $blogPageData = (new GeneralHelper())->fetchPageData('blog-page');
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['blog_data'] = $blogPageData[0]['acf'] ?? [];
        $data['posts'] = $postsResponse['data'] ?? [];
        $data['pagination'] = $postsResponse['pagination'] ?? [];
        $data['categories'] = $wp->categories();
        $data['tags'] = $wp->tags();
        $data['recentPosts'] = $wp->recentPosts(3);
        return view('blogs-list', $data);
    }

    public function show($slug, WpService $wp)
    {
        $post = $wp->postBySlug($slug);

        if (!$post) {
            abort(404);
        }

        $companyData = (new GeneralHelper())->getCompanyData('company-info');

        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['post'] = $post; // ✅ Single post
        $data['categories'] = $wp->categories() ?? [];
        $data['tags'] = $wp->tags() ?? [];
        $data['recentPosts'] = $wp->recentPosts(3) ?? [];

        return view('blog-details', $data);
    }

}
