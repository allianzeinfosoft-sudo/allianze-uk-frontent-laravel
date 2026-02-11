@php
    $layout = $data['layout'] ?? 'normal';
@endphp

<div class="about-area-2 bg-smoke space-top">
    <div class="container">
        <div class="row">

            {{-- IMAGE SIDE --}}
            <div class="col-xxl-5 col-xl-6 {{ $layout == 'reverse' ? 'order-xl-2' : '' }}">
                <div class="about-thumb2 mb-40 mb-xl-0">

                    <div class="about-img-1">
                        <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['image1'] ?? 0) ?? asset('assets/img/normal/about_2-1.png') }}">
                    </div>

                    <div class="about-img-2">
                        <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['image2'] ?? 0) ?? asset('assets/img/normal/about_2-2.png') }}">
                    </div>

                    <div class="about-counter-wrap jump-reverse">
                        <img src="{{ $data['counter_icon'] ?? asset('assets/img/icon/about_icon2-1.svg') }}">
                        <h3 class="about-counter">
                            <span class="counter-number">{{ $data['customers'] ?? 5 }}</span>k+
                        </h3>
                        <h4 class="about-counter-text">
                            {{ $data['customers_text'] ?? 'Trusted Customer' }}
                        </h4>
                    </div>

                    <div class="about-year-wrap2 movingX">
                        <div class="about-year-grid-wrap">
                            <div class="icon">
                                <img src="{{ $data['year_icon'] ?? asset('assets/img/icon/about_icon2-2.png') }}">
                            </div>
                            <h3 class="about-counter">
                                <span class="counter-number">{{ $data['years'] ?? 10 }}</span>+
                            </h3>
                        </div>
                        <h4 class="about-year-text">
                            {{ $data['years_text'] ?? 'Years Of Experiences' }}
                        </h4>
                    </div>

                </div>
            </div>

            {{-- CONTENT SIDE --}}
            <div class="col-xxl-7 col-xl-6 {{ $layout == 'reverse' ? 'order-xl-1' : '' }}">
                <div class="about-content-wrap">

                    <div class="title-area mb-30">
                        <span class="sub-title">
                            {{ $data['subtitle'] ?? 'Know About Us' }}
                        </span>

                        <h2 class="sec-title">
                            {{ $data['title'] ?? 'Default About Title' }}
                        </h2>

                        <p class="sec-text">
                            {{ $data['description'] ?? '' }}
                        </p>
                    </div>

                    @if(!empty($data['features1']['title']))
                            <div class="about-feature-wrap">
                                <div class="icon">
                                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['features1']['icon'] ?? 0) ?? asset('assets/img/icon/about_icon2-4.svg') }}">
                                </div>
                                <div class="about-feature-wrap-details">
                                    <h5 class="about-feature-title">
                                        {{ $data['features1']['title'] ?? '' }}
                                    </h5>
                                    <p class="about-feature-text">
                                        {{ $data['features1']['text'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                    @endif

                     @if(!empty($data['features2']['title']))
                            <div class="about-feature-wrap">
                                <div class="icon">
                                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['features2']['icon'] ?? 0) ?? asset('assets/img/icon/about_icon2-3.svg') }}">
                                </div>
                                <div class="about-feature-wrap-details">
                                    <h5 class="about-feature-title">
                                        {{ $data['features2']['title'] ?? '' }}
                                    </h5>
                                    <p class="about-feature-text">
                                        {{ $data['features2']['text'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
