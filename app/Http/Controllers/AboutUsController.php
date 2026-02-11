<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $aboutUsData = (new GeneralHelper())->fetchPageData('about-us');
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $data['seo_data'] = $aboutUsData[0]['yoast_head_json'] ?? [];
        $data['data_about_us'] = $aboutUsData[0]['acf'] ?? [];
        $data['faqs'] = $aboutUsData[0]['acf']['faq'] ?? [];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];

        return view('about-us', $data);
    }
}
