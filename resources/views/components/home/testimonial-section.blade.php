@php
    $data = $data ?? [];
@endphp

<div class="client-bg-area-2"
     style="background-image: url({{ new App\Helpers\GeneralHelper()->fetchImageUrl($data['bg_image']) ?? asset('assets/img/bg/testimonial-bg1-1') }});">

    <div class="testimonial-area-2 overflow-hidden">
        <div class="container">

            <div class="row justify-content-end">
                <div class="col-lg-7">

                    <div class="testiomonial-wrap-2 bg-title">

                        <div class="title-area">
                            <span class="sub-title">
                                {{ $data['subtitle'] ?? 'CLIENTS REVIEWS' }}
                            </span>

                            <h2 class="sec-title text-white">
                                {{ $data['title'] ?? 'WHAT OUR CLIENT SAYS' }}
                            </h2>
                        </div>

                        <div class="quote-icon">
                            <img src="{{ new App\Helpers\GeneralHelper()->fetchImageUrl($data['quote_icon']) ?? asset('assets/img/icon/quote2-1.svg') }}">
                        </div>

                        <div class="row global-carousel {{ $data['slider_class'] ?? 'testi-slider-2' }}"
                             data-slide-show="{{ $data['slide_show'] ?? 1 }}">

                            @if(!empty($data['testimonial_1']['name']))    
                                <div class="col-lg-6">
                                    <div class="testi-card style2">

                                        <div class="testi-card_content">

                                            <div class="testi-card-profile">
                                                <div class="testi-profile_thumb">
                                                    <img src="{{ new App\Helpers\GeneralHelper()->fetchImageUrl($data['testimonial_1']['image']) ?? asset('assets/img/testimonial/testimonial-2-1.png') }}" width="74px" height="74px" />
                                                </div>

                                                <div class="testi-card-profile-details">
                                                    <h4 class="testi-profile-title">
                                                        {{ $data['testimonial_1']['name'] ?? '' }}
                                                    </h4>

                                                    <span class="testi-profile-desig">
                                                        {{ $data['testimonial_1']['designation'] ?? '' }}
                                                    </span>
                                                </div>
                                            </div>

                                            <p class="testi-card_text">
                                                {{ $data['testimonial_1']['text'] ?? '' }}
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            @endif

                            @if(!empty($data['testimonial_2']['name']))    
                                <div class="col-lg-6">
                                    <div class="testi-card style2">
                                        <div class="testi-card_content">
                                            <div class="testi-card-profile">
                                                <div class="testi-profile_thumb">
                                                    <img src="{{ new App\Helpers\GeneralHelper()->fetchImageUrl($data['testimonial_2']['image']) ?? asset('assets/img/testimonial/testimonial-2-1.png') }}" width="74px" height="74px" >
                                                </div>
                                                <div class="testi-card-profile-details">
                                                    <h4 class="testi-profile-title">
                                                        {{ $data['testimonial_2']['name'] ?? '' }}
                                                    </h4>
                                                    <span class="testi-profile-desig">
                                                        {{ $data['testimonial_2']['designation'] ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="testi-card_text">
                                                {{ $data['testimonial_2']['text'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(!empty($data['testimonial_3']['name']))    
                                <div class="col-lg-6">
                                    <div class="testi-card style2">
                                        <div class="testi-card_content">
                                            <div class="testi-card-profile">
                                                <div class="testi-profile_thumb">
                                                    <img src="{{ new App\Helpers\GeneralHelper()->fetchImageUrl($data['testimonial_3']['image']) ?? asset('assets/img/testimonial/testimonial-2-1.png') }}" width="74px" height="74px" >
                                                </div>
                                                <div class="testi-card-profile-details">
                                                    <h4 class="testi-profile-title">
                                                        {{ $data['testimonial_3']['name'] ?? '' }}
                                                    </h4>
                                                    <span class="testi-profile-desig">
                                                        {{ $data['testimonial_3']['designation'] ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="testi-card_text">
                                                {{ $data['testimonial_3']['text'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="icon-box">
                            <button data-slick-prev=".{{ $data['slider_class'] ?? 'testi-slider-2' }}"
                                    class="slick-arrow style3 default">
                                <i class="fas fa-arrow-left"></i>
                            </button>

                            <button data-slick-next=".{{ $data['slider_class'] ?? 'testi-slider-2' }}"
                                    class="slick-arrow style3 default">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="testimonial-thumb-2">
            <img src="{{ (new App\Helpers\GeneralHelper())-> fetchImageUrl(($data['bg_image']) ?? asset('assets/img/testimonial/2.png')) }}">
        </div>

    </div>
</div>
