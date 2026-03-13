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
                    <h1 class="breadcumb-title">About Us</h1>
                    <ul class="breadcumb-menu">
                         <li><a href="{{ route('home') }}">Home</a></li>
                         <li class="active">About Us</li>
                    </ul>
               </div>
               </div>
               <div class="col-lg-6 d-lg-block d-none">
               <div class="breadcumb-thumb">
                    <img src=" {{ (new App\Helpers\GeneralHelper())->fetchImageUrl($data_about_us['breadcrumbs_image']) ?? '' }}" alt="img">
               </div>            
               </div>
          </div>
     </div>
</div>

   <!--==============================
    About Area  
    ==============================-->
    <div class="space-top">
        <div class="container">
            <div class="row">

                <div class="col-xxl-12 col-xl-12">
                    <div class="about-content-wrap">
                        <div class="title-area mb-30">
                            <span class="sub-title">{{ $data_about_us['subtitle'] ?? '' }}</span>
                            <h2 class="sec-title">{{ $data_about_us['title'] ?? '' }} <img class="title-bg-shape shape-center" src="assets/img/bg/title-bg-shape.png" alt="img"></h2>
                            <div class="sec-text text-justify">{!! $data_about_us['description'] ?? '' !!}</div>
                        </div>
                        <div class="about-feature-wrap style-shadow">
                            <div class="icon">
                                <img src="assets/img/icon/about_icon2-3.svg" alt="img">
                            </div>
                            <div class="about-feature-wrap-details">
                                <h5 class="about-feature-title">Our Vision</h5>
                                <p class="about-feature-text text-justify">{!! $data_about_us['our_vision'] ?? '' !!}</p>
                            </div>
                        </div>
                        <div class="about-feature-wrap style-shadow">
                            <div class="icon">
                                <img src="assets/img/icon/about_icon2-4.svg" alt="img">
                            </div>
                            <div class="about-feature-wrap-details">
                                <h5 class="about-feature-title">Our Mission</h5>
                                <p class="about-feature-text text-justify">{!! $data_about_us['our_mission'] ?? '' !!}</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div> 
    
    
     <section class="faq-area-2 space">
    <div class="container">
        <div class="row gx-60 flex-row-reverse">

            
            {{-- RIGHT CONTENT SIDE --}}
            <div class="col-xl-12 col-lg-12">

                <div class="title-area">
                    <span class="sub-title">
                        {{ $data['subtitle'] ?? 'FAQs' }}
                    </span>

                    <h2 class="sec-title">
                        {!! $data['title'] ?? 'Frequently Asked Questions' !!}
                    </h2>
                </div>

                <div class="accordion-area accordion" id="faqAccordion">
                    @if(!empty($faqs['faq_1']['question']) && !empty($faqs['faq_1']['answer']))
                        @php
                            $faq = $faqs['faq_1'];
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
                                    {{ $faqs['faq_1']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_1']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($faqs['faq_2']['question']) && !empty($faqs['faq_2']['answer']))
                        @php
                            $faq = $faqs ['faq_2'];
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
                                    {{ $faqs['faq_2']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_2']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($faqs['faq_3']['question']) && !empty($faqs['faq_3']['answer']))
                        @php
                            $faq = $faqs ['faq_3'];
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
                                    {{ $faqs['faq_3']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_3']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($faqs['faq_4']['question']) && !empty($faqs['faq_4']['answer']))
                        @php
                            $faq = $faqs ['faq_4'];
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
                                    {{ $faqs['faq_4']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_4']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($faqs['faq_5']['question']) && !empty($faqs['faq_5']['answer']))
                        @php
                            $faq = $faqs ['faq_5'];
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
                                    {{ $faqs['faq_5']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_5']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($faqs['faq_6']['question']) && !empty($faqs['faq_6']['answer']))
                        @php
                            $faq = $faqs ['faq_6'];
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
                                    {{ $faqs['faq_6']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_6']['answer'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>     
                    @endif

                    @if(!empty($faqs['faq_7']['question']) && !empty($faqs['faq_7']['answer']))
                        @php
                            $faq = $faqs ['faq_7'];
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
                                    {{ $faqs['faq_7']['question'] ?? '' }}
                                </button>
                            </div>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
                                 aria-labelledby="{{ $headerId }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text text-justify">
                                        {{ $faqs['faq_7']['answer'] ?? '' }}
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



@endsection