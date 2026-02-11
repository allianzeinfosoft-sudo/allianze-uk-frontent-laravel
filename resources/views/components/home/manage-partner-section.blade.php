<div class="partner-manage-area space-top">
    <div class="container">

        {{-- HEADER FULL WIDTH --}}
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center mb-50">

                    <span class="sub-title">
                        {{ $data['subtitle'] ?? 'Manage Partners' }}
                    </span>

                    <h2 class="sec-title">
                        {{ $data['title'] ?? 'Our Partner Management Solutions' }}
                    </h2>

                    <p class="sec-text mx-auto" style="max-width: 750px;">
                        {{ $data['description'] ?? '' }}
                    </p>

                </div>
            </div>
        </div>

        
        <div class="row g-4">
                @if(!empty($data['cost_savings']['title']) )
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="partner-feature-card h-100 text-center p-4 bg-white rounded">
                        @if(!empty($data['cost_savings']['icon']))
                        <div class="icon mb-20">
                            <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['cost_savings']['icon'] ?? 0) ?? asset('assets/img/normal/partner_icon-3.png') }}" alt="">
                        </div>
                        @endif
                        <h5 class="feature-title mb-15">
                            {{ $data['cost_savings']['title'] }}
                        </h5>
                        <p class="feature-text mb-0">
                            {{ $data['cost_savings']['text'] }}
                        </p>
                    </div>
                </div>
                @endif

                @if(!empty($data['transparent_engagement']['title']) )
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="partner-feature-card h-100 text-center p-4 bg-white rounded">
                            @if(!empty($data['transparent_engagement']['icon']))
                                <div class="icon mb-20">
                                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['transparent_engagement']['icon'] ?? 0) ?? asset('assets/img/normal/partner_icon-2.png') }}" alt="">
                                </div>
                            @endif
                            <h5 class="feature-title mb-15">
                                {{ $data['transparent_engagement']['title'] }}
                            </h5>
                            <p class="feature-text mb-0">
                                {{ $data['transparent_engagement']['text'] }}
                            </p>
                        </div>
                    </div>
                @endif

                @if(!empty($data['centric_expertise']['title']) )
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="partner-feature-card h-100 text-center p-4 bg-white rounded">
                            @if(!empty($data['centric_expertise']['icon']))
                                <div class="icon mb-20">
                                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['centric_expertise']['icon'] ?? 0) ?? asset('assets/img/normal/partner_icon-1.png') }}" alt="">
                                </div>
                            @endif
                            <h5 class="feature-title mb-15">
                                {{ $data['centric_expertise']['title'] }}
                            </h5>
                            <p class="feature-text mb-0">
                                {{ $data['centric_expertise']['text'] }}
                            </p>
                        </div>
                    </div>
                @endif

                 @if(!empty($data['scalable_solutions']['title']) )
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="partner-feature-card h-100 text-center p-4 bg-white rounded">
                            @if(!empty($data['scalable_solutions']['icon']))
                                <div class="icon mb-20">
                                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data['scalable_solutions']['icon'] ?? 0) ?? asset('assets/img/normal/partner_icon-4.png') }}" alt="">
                                </div>
                            @endif
                            <h5 class="feature-title mb-15">
                                {{ $data['scalable_solutions']['title'] }}
                            </h5>
                            <p class="feature-text mb-0">
                                {{ $data['scalable_solutions']['text'] }}
                            </p>
                        </div>
                    </div>
                @endif


            </div>


    </div>
</div>
