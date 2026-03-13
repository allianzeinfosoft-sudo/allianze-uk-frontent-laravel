<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;

class ServiceController extends Controller
{
    //
    public function staff_augmentation_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('staff-augmentation-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.staff-augmentation', $data);
    }

    public function data_automation_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('data-automation-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.data-automation', $data);
    }
    public function data_entry_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('data-entry-service');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.data-entry', $data);
    }
    public function adobe_photoshop_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('adobe-photoshop-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.adobe-photoshop', $data);
    }

    public function cad_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('cad-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.cad', $data);
    }

    public function engineering_design_service()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('engineering-design-service');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.engineering-design', $data);
    }

    public function engineering_documentation_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('engineering-documentation-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.engineering-documentation', $data);
    }

    public function healthcare_bpo_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('healthcare-bpo-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.healthcare-bpo', $data);
    }

    public function image_retouching_service()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('image-retouching-service');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.image-retouching', $data);
    }

    public function insurance_outsourcing()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('insurance-outsourcing');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }

    public function market_research_and_financial_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('market-research-and-financial-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }
    
    public function real_estate_image_editing_service()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('real-estate-image-editing-service');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }

    public function scanning_and_indexing_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('scanning-and-indexing-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }
    
    public function telecom_survey_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('telecom-survey-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }

    public function virtual_assistant_service()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('virtual-assistant-service');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }

    public function wedding_image_editing_services()
    {
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $serviceData = (new GeneralHelper())->fetchPageData('wedding-image-editing-services');
        $data['meta_title'] = $serviceData[0]['title']['rendered'];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];
        $data['seo_data'] = $serviceData[0]['yoast_head_json'] ?? [];
        $data['data_service'] = $serviceData[0]['acf'] ?? [];
        return view('services.insurance-outsourcing', $data);
    }
}
