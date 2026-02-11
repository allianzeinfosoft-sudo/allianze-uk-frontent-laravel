@php
    $data = app('App\Helpers\GeneralHelper')->getCompanyData('company-info');
    $company_info = $data[0]['acf'] ?? [];    
@endphp

<header class="nav-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-envelope"></i><a href="mailto:{{ $company_info['general_settings']['e-mail'] ?? 'info@example.com' }}">{{ $company_info['general_settings']['e-mail'] ?? 'info@example.com'}}</a></li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $company_info['general_settings']['address'] ?? 'info@example.com' }}</li>
                                <li><i class="fas fa-phone"></i>{{ $company_info['general_settings']['phone'] ?? 'info@example.com' }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links ps-0">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <a href="{{ $company_info['general_settings']['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $company_info['general_settings']['instagram'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $company_info['general_settings']['x_twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $company_info['general_settings']['linked_in'] ?? '#' }}"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="header-navbar-logo">
                    <a href="{{ route('home') }}"><img src="{{(new App\Helpers\GeneralHelper())->fetchImageUrl($company_info['general_settings']['company_logo']) ?? asset('assets/img/logo-white.svg')}}" alt="logo"></a>
                </div>
                <div class="container">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto d-xl-none d-block">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img src="{{(new App\Helpers\GeneralHelper())->fetchImageUrl($company_info['general_settings']['company_logo']) ?? asset('assets/img/logo-white.svg')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">

                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                   @foreach(config('menu.main') as $item)
                                        @include('components.menu-item', ['item' => $item])
                                   @endforeach
                                </ul>
                            </nav>

                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-xl-block d-none">
                            <div class="header-button">                                
                                <div class="navbar-right-desc d-xxl-flex d-none">
                                    <img src="{{asset('assets/img/icon/chat.svg') }}" alt="img">
                                    <div class="navbar-right-desc-details">
                                        <h6 class="title">Need help?</h6>
                                        <a class="link" href="tel:{{ $company_info['general_settings']['mobile'] ?? '' }}">{{ $company_info['general_settings']['mobile'] ?? '' }}</a>
                                    </div>
                                </div>
                                <a href="{{route('contact-us')}}" class="btn style-border3">Get A Quote <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg"></div>
            </div>
        </div>
    </header>