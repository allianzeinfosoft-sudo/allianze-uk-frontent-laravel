@extends('layout.app')

@section('meta_title', $seo_data['title'] ?? 'Default Title')
@section('meta_description', $seo_data['description'] ?? 'Default Description')

@section('content')

<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $meta_title ?? 'Default Title' }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Service</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="breadcumb-thumb">
                        <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['bc_image']) ?? asset('assets/img/normal/breadcrumb-thumb.png') }}" alt="img">
                    </div>            
                </div>
            </div>
        </div>
    </div>
     <!-- /breadcumb -->

     <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row gx-40 flex-row-reverse">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-45">
                            <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['service_image']) ?? asset('assets/img/service/service-details1-1.png') }}" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">{{ $data_service['title'] ?? 'Default Title' }}</h2>
                            <p class="mb-25">{!! $data_service['service_description'] ?? 'Default Description' !!}</p>
                            <h3 class="page-subtitle mb-15">{{ $data_service['subtitle_1'] ?? 'Default Subtitle' }}</h3>
                            <h4 class="mb-25">{{ $data_service['sub_services']['title'] ?? 'Default Description 2' }}</h4>
                         
                            @if ($data_service['sub_services']['service_1']['title'] || $data_service['sub_services']['service_2']['title'])
                              <div class="row gy-30">
                                   @if ($data_service['sub_services']['service_1']['title'])     
                                        <div class="col-md-6">
                                        <div class="page-img">
                                             <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_1']['service_1_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                        </div>
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_1']['title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_1']['descriptions'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif

                                   @if ($data_service['sub_services']['service_2']['title'])     
                                        <div class="col-md-6">
                                        <div class="page-img">
                                             <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_2']['service_2_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                        </div>
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_2']['title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_2']['descriptions'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif
                              </div>
                            @endif

                            @if($data_service['sub_services']['service_3']['title'] || $data_service['sub_services']['service_4']['title'])     
                              <div class="row gy-30">
                                   @if($data_service['sub_services']['service_3']['title'])     
                                        <div class="col-md-6">
                                             <div class="page-img">
                                                  <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_3']['service_3_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                             </div>
                                             <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_3']['title'] ?? 'Default Subtitle' }}</h3>
                                             <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_3']['description'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif

                                   @if ($data_service['sub_services']['service_4']['title'])     
                                        <div class="col-md-6">
                                             <div class="page-img">
                                                  <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_4']['service_4_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                             </div>
                                             <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_4']['title'] ?? 'Default Subtitle' }}</h3>
                                             <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_4']['description'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif
                              </div>
                            @endif

                            @if($data_service['sub_services']['service_5']['title'] || $data_service['sub_services']['service_6']['title'])
                              <div class="row gy-30">
                                   @if ($data_service['sub_services']['service_5']['title'])     
                                        <div class="col-md-6">
                                             <div class="page-img">
                                                  <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_5']['service_5_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                             </div>
                                             <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_5']['title'] ?? 'Default Subtitle' }}</h3>
                                             <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_5']['description'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif

                                   @if ($data_service['sub_services']['service_6']['title']) 
                                   <div class="col-md-6">
                                        <div class="page-img">
                                             <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_6']['service_6_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                        </div>
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_6']['title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_6']['description'] ?? 'Default Description 3' }}</p>
                                   </div>
                                   @endif
                              </div>
                            @endif

                            @if($data_service['sub_services']['service_7']['title'] || $data_service['sub_services']['service_8']['title'])
                              <div class="row gy-30">
                                   @if ($data_service['sub_services']['service_7']['title'])      
                                        <div class="col-md-6">
                                             <div class="page-img">
                                                  <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_7']['service_7_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                             </div>
                                             <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_7']['title'] ?? 'Default Subtitle' }}</h3>
                                             <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_7']['description'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif

                                   @if ($data_service['sub_services']['service_8']['title'])     
                                        <div class="col-md-6">
                                             <div class="page-img">
                                                  <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_8']['service_8_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                             </div>
                                             <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_8']['title'] ?? 'Default Subtitle' }}</h3>
                                             <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_8']['description'] ?? 'Default Description 3' }}</p>
                                        </div>
                                   @endif
                              </div>
                            @endif

                              @if($data_service['sub_services']['service_9']['title'])
                                   <div class="row gy-30">
                                   <div class="col-md-6">
                                        <div class="page-img">
                                             <img src="{{ (new app\Helpers\GeneralHelper())->fetchImageUrl($data_service['sub_services']['service_9']['service_9_image']) ?? asset('assets/img/service/service-details1-2.png') }}" alt="img">
                                        </div>
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_services']['service_9']['title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_services']['service_9']['description'] ?? 'Default Description 3' }}</p>
                                   </div>
                                   </div>
                              @endif

                            <h3 class="page-subtitle mb-15">{{ $data_service['subtitle_2'] ?? '' }}</h3>
                            <h4 class="mb-25">{{ $data_service['sub_section']['section_title'] ?? '' }}</h4>

                            <div class="row gy-30 mb-30">
                                <div class="col-md-6">
                                    <div class="team-card style2">
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_section']['section_1']['section_1_title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_section']['section_1']['section_1_description'] ?? 'Default Description 3' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="team-card style2">
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_section']['section_2']['section_2_title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_section']['section_2']['section_2_description'] ?? 'Default Description 3' }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-30 mb-30">
                                <div class="col-md-6">
                                    <div class="team-card style2">
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_section']['section_3']['section_3_title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_section']['section_3']['section_3_description'] ?? 'Default Description 3' }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="team-card style2">
                                        <h3 class="page-subtitle mb-15">{{ $data_service['sub_section']['section_4']['section_4_title'] ?? 'Default Subtitle' }}</h3>
                                        <p class="mb-30 text-justify">{{ $data_service['sub_section']['section_4']['section_4_description'] ?? 'Default Description 3' }}</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="page-subtitle mb-15">{{ $data_service['subtitle_3'] ?? 'Default Subtitle' }}</h3>
                            <p class="mb-30 text-justify">{{ $data_service['description'] ?? 'Default Description 3' }}</p>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_service-list">
                            <h3 class="widget_title">All Services</h3>
                            <ul>
                                @include('layout.partials.sevice-link')                             
                            </ul>
                        </div> 
                        {{-- <div class="widget widget_contact"> --}}
                            {{-- <div class="widget-contact-wrap text-center">
                                <h3 class="widget_title">Contact Us</h3>
                                <p class="widget-contact-text text-justify">It is a long established fact that a reader will be distracted by the and readable content repair</p>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p class="widget-contact-text text-justify">Need help?</p>
                                <h5><a href="tel:80855510111">{{ $company_info['phone'] }}</a></h5>
                            </div> --}}
                        {{-- </div>  --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-top-1 bg-dark" style="background-image: url({{ asset('assets/img/bg/footer-top-bg1-1.png') }});">
            <div class="call-media-wrap">
                <div class="media-body">
                    <h4 class="link">
                        <a class="text-white" href="javascript:void(0)">{{ $data_service['subtitle_4'] ?? 'Default Description 3' }}</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>



@endsection