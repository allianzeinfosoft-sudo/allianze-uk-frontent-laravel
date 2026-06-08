@php
    $data = app('App\Helpers\GeneralHelper')->getFooterData('footer');
    $footerData = $data[0]['acf']['footer_data'] ?? [];

    $companyData = new App\Helpers\GeneralHelper()->fetchPageData('company-info');
    $company = $companyData[0]['acf']['general_settings'] ?? [];
@endphp

    

<footer class="footer-wrapper footer-layout1" style="background-image: url({{ new app\Helpers\GeneralHelper()->fetchImageUrl($footerData['background_image'] ?? null) }});">    
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">{{$footerData['col_1']['title'] ?? 'Company'}}</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @if(isset($footerData['col_1']['link_1_title']))
                                        <li><a href="/">{{$footerData['col_1']['link_1_title'] ?? 'Link 1'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_1']['link_2_title']))
                                        <li><a href="/about-us">{{$footerData['col_1']['link_2_title'] ?? 'Link 2'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_1']['link_3_title']))
                                        <li><a href="/blogs">{{$footerData['col_1']['link_3_title'] ?? 'Link 3'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_1']['link_4_title']))
                                        <li><a href="/contact-us">{{$footerData['col_1']['link_4_title'] ?? 'Link 4'}}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">{{$footerData['col_2']['title'] ?? 'Services'}}</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @if(isset($footerData['col_2']['link_1_title']))
                                        <li><a href="/services/data-entry-services">{{$footerData['col_2']['link_1_title'] ?? 'Link 1'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_2']['link_2_title']))
                                        <li><a href="/services/virtual-assistant-service">{{$footerData['col_2']['link_2_title'] ?? 'Link 2'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_2']['link_3_title']))
                                        <li><a href="/services/engineering-design-service">{{$footerData['col_2']['link_3_title'] ?? 'Link 3'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_2']['link_4_title']))
                                        <li><a href="/services/image-retouching-service">{{$footerData['col_2']['link_4_title'] ?? 'Link 4'}}</a></li>
                                    @endif
                                    @if(isset($footerData['col_2']['link_5_title']))
                                        <li><a href="{{$footerData['col_2']['link_5_url'] ?? '#'}}">{{$footerData['col_2']['link_5_title'] ?? 'Link 5'}}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact</h3>
                            <div class="widget-contact">
                                <p><a href="tel:{{ $company['phone'] ?? '' }}">+{{ $company['phone'] ?? '' }}</a></p>
                                <p><a href="mailto:{{ $company['e-mail'] ?? '' }}">{{ $company['e-mail']?? '' }}</a></p>
                                <p>{{ $company['address'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-md-between justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© <a href="#">Allianze Infosoft</a> {{ date('Y') }} | All Rights Reserved</p></div>
                    <div class="col-auto">
                        <div class="footer-links">
                            {{-- <a href="contact.html">Tarms & Condition</a>
                            <a href="contact.html">Privacy Policy</a>
                            <a href="contact.html">Contact Us</a> --}}
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </footer>