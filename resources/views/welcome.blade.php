@extends('layout.app')

@section('meta_title', $seo_data['title'] ?? 'Default Title')
@section('meta_description', $seo_data['description'] ?? 'Default Description')

@section('content')

    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-4" id="hero"
        style="background-image: url({{ (new App\Helpers\GeneralHelper())->fetchImageUrl($hero_data['background_image'] ?? null) ?? asset('assets/img/hero/banner1.png') }});">
        <div class="hero-shape4-1">
            <img class="shape-position shape1" src="{{asset('assets/img/hero/shape1.png')}}" alt="img">
            <img class="shape-position shape2" src="{{asset('assets/img/hero/shape2.png')}}" alt="img">
            <img class="shape-position shape3" src="{{asset('assets/img/hero/shape3.png')}}" alt="img">
        </div>
        <div class="container">
            <div class="row">                
                <div class="col-xxl-6 col-xl-5 col-lg-8">
                    <div class="hero-style4">
                        <span class="sub-title text-white">{{ $hero_data['subtitle'] ?? '' }}</span>
                        <h1 class="hero-title text-white">{{ $hero_data['hero_title'] ?? '' }} </h1>
                        <p class="hero-text text-white text-justify">{{ $hero_data['hero_text'] ?? '' }} </p>
                    </div>
                </div>
            </div>                
        </div>
    </div>
    <!--======== / Hero Section ========-->

    {{-- About section  --}}

    <x-about-section :data="$data_about_us" />

    {{-- Manage partnering --}}

    <x-manage-partner-section :data="$manage_partners" />

    <!--==============================
    Service Area 02  
    ==============================-->


    <x-industries-service :data="$industries" />
    
    <!--==============================
    Case Study Area
    ==============================-->
    
    <x-case-study :data="$case_studies" />


    <!--==============================
    Client Area  
    ==============================-->
    <x-testimonial-section :data="$testimonial" />


    <!--==============================
    Faq Area 02  
    ==============================-->

    <x-faq-section :data="$faqs" />

    <!--==============================
    Blog Area  
    ==============================-->
       

    <div class="container">
        <div class="footer-top-1 bg-dark" style="background-image: url({{asset('assets/img/bg/footer-top-bg1-1.png')}});">
            <div class="footer-logo">
                <a href="index.html">
                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($company_info['company_logo'] ?? null) ?? asset('assets/img/logo-white.svg') }}" alt="Fixturbo">
                </a>
            </div>
            <div class="call-media-wrap">
                <div class="icon">
                    <img src="{{asset('assets/img/icon/phone-1.svg')}}" alt="img">
                </div>
                <div class="media-body">
                    <h6 class="title text-white">Requesting A Call:</h6>
                    <h4 class="link">
                        <a class="text-white" href="tel:{{ $company_info['mobile'] ?? '' }}">{{ $company_info['mobile'] ?? '' }}</a>
                    </h4>
                </div>
            </div>
            <div class="social-btn">
                <a href="{{ $company_info['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ $company_info['x_twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a href="{{ $company_info['instagram'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

@endsection

@push('css')
<style>
    .partner-feature-card {
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }

    .partner-feature-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .process-card {
        background: #fff;
        border: 1px solid #f1f1f1;
        transition: all 0.35s ease;
        text-align: left;
    }

    .process-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .bg-primary-soft {
        background: rgba(13,110,253,0.08);
    }

    .transition-all {
        transition: all 0.3s ease;
    }
</style>
    
@endpush