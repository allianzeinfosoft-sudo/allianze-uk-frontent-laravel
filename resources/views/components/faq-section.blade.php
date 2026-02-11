@php
    $data = $data ?? [];
@endphp

<section class="faq-area-2 space">
    <div class="container">
        <div class="row gx-60 flex-row-reverse">

            {{-- LEFT IMAGE SIDE --}}
            <div class="col-xl-6">
                <div class="faq-thumb3 mb-xl-0 mb-50">

                    <div class="about-counter-wrap jump-reverse">
                        <img src="{{ (new App\Helpers\GeneralHelper())-> fetchImageUrl(($data['counter_icon']) ?? asset('assets/img/icon/about_icon2-1.svg')) }}">

                        <h3 class="about-counter">
                            <span class="counter-number">
                                {{ $data['counter_number'] ?? 2000 }}
                            </span>+
                        </h3>

                        <h4 class="about-counter-text">
                            {{ $data['counter_text'] ?? 'Employees Working' }}
                        </h4>
                    </div>

                    <img src="{{ (new App\Helpers\GeneralHelper())-> fetchImageUrl(($data['main_image']) ?? asset('assets/img/normal/faq-thumb-3-1.png')) }}">
                    <div class="faq-shape jump">
                        <img src="{{ (new App\Helpers\GeneralHelper())-> fetchImageUrl(($data['shape_image']) ?? asset('assets/img/normal/11.png')) }}">
                    </div>

                </div>
            </div>

            {{-- RIGHT CONTENT SIDE --}}
            <div class="col-xl-6">

                <div class="title-area">
                    <span class="sub-title">
                        {{ $data['subtitle'] ?? 'Ask Anything' }}
                    </span>

                    <h2 class="sec-title">
                        {!! $data['title'] ?? 'Empowering businesses <br> For A Brighter Future' !!}
                    </h2>
                </div>

                <div class="accordion-area accordion" id="faqAccordion">

                    @if(!empty($data['faq_1']['question']) && !empty($data['faq_1']['answer']))
                        @php
                            $faq = $data['faq_1'];
                            $headerId = 'headingOne';
                            $collapseId = 'collapseOne';
                            $active = true;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_1']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_1']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($data['faq_2']['question']) && !empty($data['faq_2']['answer']))
                        @php
                            $faq = $data['faq_2'];
                            $headerId = 'headingTwo';
                            $collapseId = 'collapseTwo';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_2']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_2']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($data['faq_3']['question']) && !empty($data['faq_3']['answer']))
                        @php
                            $faq = $data['faq_3'];
                            $headerId = 'headingThree';
                            $collapseId = 'collapseThree';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_3']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_3']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($data['faq_4']['question']) && !empty($data['faq_4']['answer']))
                        @php
                            $faq = $data['faq_4'];
                            $headerId = 'headingFour';
                            $collapseId = 'collapseFour';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_4']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_4']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                     @if(!empty($data['faq_5']['question']) && !empty($data['faq_5']['answer']))
                        @php
                            $faq = $data['faq_5'];
                            $headerId = 'headingFive';
                            $collapseId = 'collapseFive';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_5']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_5']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($data['faq_6']['question']) && !empty($data['faq_6']['answer']))
                        @php
                            $faq = $data['faq_6'];
                            $headerId = 'headingSix';
                            $collapseId = 'collapseSix';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_6']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_6']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                        
                    @if(!empty($data['faq_7']['question']) && !empty($data['faq_7']['answer']))
                        @php
                            $faq = $data['faq_7'];
                            $headerId = 'headingSeven';
                            $collapseId = 'collapseSeven';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_7']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_7']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($data['faq_8']['question']) && !empty($data['faq_8']['answer']))
                        @php
                            $faq = $data['faq_8'];
                            $headerId = 'headingEight';
                            $collapseId = 'collapseEight';
                            $active = false;
                        @endphp
                        <div class="accordion-card style2 {{ $active ? 'active' : '' }}">
                            <div class="accordion-header" id="{{ $headerId }}">
                                <button class="accordion-button {{ $active ? '' : 'collapsed' }}" type="button" 
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" 
                                    aria-expanded="{{ $active ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $data['faq_8']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        {{ $data['faq_8']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

            </div>

        </div>
    </div>
</section>
