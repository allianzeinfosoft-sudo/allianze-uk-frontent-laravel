<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\GeneralHelper;

class Home extends Controller
{
    //
    public function index()
    {
        $homedata = (new GeneralHelper())->fetchPageData('home');
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $data['seo_data']           = $homedata[0]['yoast_head_json'] ?? [];
        $data['hero_data']          = $homedata[0]['acf']['hero'] ?? [];
        $data['data_about_us']      = $homedata[0]['acf']['about_us'] ?? [];
        $data['manage_partners']    = $homedata[0]['acf']['manage_partners'] ?? [];
        $data['industries']         = $homedata[0]['acf']['industries'] ?? [];
        $data['case_studies']       = $homedata[0]['acf']['case_study'] ?? [];
        $data['testimonial']        = $homedata[0]['acf']['testimoniel'] ?? [];
        $data['faqs']               = $homedata[0]['acf']['faq'] ?? [];
        $data['company_info']       = $companyData[0]['acf']['general_settings'] ?? [];

        return view('welcome', $data);
    }


    
}
