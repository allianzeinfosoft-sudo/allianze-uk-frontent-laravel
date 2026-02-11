@props(['data' => []])

<div class="service-area-2 bg-smoke space overflow-hidden">
    
    {{-- TITLE AREA --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center">
                    <span class="sub-title">
                        {{ $data['subtitle'] ?? 'Our Services' }}
                    </span>

                    <h2 class="sec-title">
                        {{ $data['title'] ?? 'Industries We Serve' }}
                    </h2>
                    <p class="service-card_text">
                        {{ $data['description'] ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- SERVICES GRID --}}
    <div class="container">
        <div class="row gy-4 justify-content-center">

            @if (!empty($data['healthcare']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['healthcare']['bg_image']) ?? asset('assets/img/service/service-bg-1.png') }});">
                            <div>
                                @if($data['healthcare']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['healthcare']['icon'] }}" alt="">
                                </div>
                                @endif

                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['healthcare']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['healthcare']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['education']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['education']['bg_image']) ?? asset('assets/img/service/service-bg-2.png') }});">
                            <div>
                                @if($data['education']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['education']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['education']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['education']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['marketing']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['marketing']['bg_image']) ?? asset('assets/img/service/service-bg-3.png') }});">
                            <div>
                                @if($data['marketing']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['marketing']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['marketing']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['marketing']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['banking_and_finance']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['banking_and_finance']['bg_image']) ?? asset('assets/img/service/service-bg-4.png') }});">
                            <div>
                                @if($data['banking_and_finance']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['banking_and_finance']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['banking_and_finance']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['banking_and_finance']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['agriculture']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['agriculture']['bg_image']) ?? asset('assets/img/service/service-bg-5.png') }});">
                            <div>
                                @if($data['agriculture']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['agriculture']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['agriculture']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['agriculture']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['manufacturing']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['manufacturing']['bg_image']) ?? asset('assets/img/service/service-bg-6.png') }});">
                            <div>
                                @if($data['manufacturing']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['manufacturing']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['manufacturing']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['manufacturing']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['retail']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['retail']['bg_image']) ?? asset('assets/img/service/service-bg-7.png') }});">
                            <div>
                                @if($data['retail']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['retail']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['retail']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['retail']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['transportation']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['transportation']['bg_image']) ?? asset('assets/img/service/service-bg-8.png') }});">
                            <div>
                                @if($data['transportation']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['transportation']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['transportation']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['transportation']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['cybersecurity']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['cybersecurity']['bg_image']) ?? asset('assets/img/service/service-bg-9.png') }});">
                            <div>
                                @if($data['cybersecurity']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['cybersecurity']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['cybersecurity']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['cybersecurity']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['food_and_beverage']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url({{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['food_and_beverage']['bg_image']) ?? asset('assets/img/service/service-bg-10.png') }});">
                            <div>
                                @if($data['food_and_beverage']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['food_and_beverage']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['food_and_beverage']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['food_and_beverage']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['automobile']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['automobile']['bg_image']) ?? asset('assets/img/service/service-bg-11.png') }});">
                            <div>
                                @if($data['automobile']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['automobile']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['automobile']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['automobile']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($data['real_estate_and_property']['title']) )    
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_content"
                                style="background-image: url( {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['real_estate_and_property']['bg_image']) ?? asset('assets/img/service/service-bg-12.png') }});">
                            <div>
                                @if($data['real_estate_and_property']['icon'])
                                <div class="service-card_icon">
                                    <img src="{{ $data['real_estate_and_property']['icon'] }}" alt="">
                                </div>
                                @endif
                                <h4 class="service-card_title h5">
                                    <a href="javascript:void(0);">
                                        {{ $data['real_estate_and_property']['title'] }}
                                    </a>
                                </h4>

                                <p class="service-card_text">
                                    {{ $data['real_estate_and_property']['text'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                

        </div>
    </div>

</div>
