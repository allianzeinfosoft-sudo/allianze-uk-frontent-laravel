@extends('layout.app')

@section('meta_title', $seo_data['title'] ?? 'Default Title')
@section('meta_description', $seo_data['description'] ?? 'Default Description')

@section('content')

<div class="breadcumb-wrapper">
     <!-- bg animated image/ -->   
     <div class="container">
          <div class="row">
               <div class="col-lg-6">
               <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contact</h1>
                    <ul class="breadcumb-menu">
                         <li><a href="{{ route('home') }}">Home</a></li>
                         <li class="active">Contact</li>
                    </ul>
               </div>
               </div>
               <div class="col-lg-6 d-lg-block d-none">
               <div class="breadcumb-thumb">
                    <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($contact_data['bc_image']) ?? '' }}" alt="img">
               </div>            
               </div>
          </div>
     </div>
</div>

<div class="contact-area space">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h6 class="contact-info_title">Address</h6>
                        <p class="contact-info_text">{{ $company_info['address'] }}</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h6 class="contact-info_title">Phone Number</h6>
                        <p class="contact-info_text"><a href="tel:{{ $company_info['phone'] }}">{{ $company_info['phone'] }}</a></p>
                        <p class="contact-info_text"><a href="tel:{{ $company_info['mobile'] }}">{{ $company_info['mobile'] }}</a></p>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h6 class="contact-info_title">E-mail</h6>
                        <p class="contact-info_text"><a href="mailto:{{ $company_info['e-mail'] }}">{{ $company_info['e-mail'] }}</a></p>
                        <p class="contact-info_text"><a href="{{ $company_info['website'] }}">{{ $company_info['website'] }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="map-sec">
                <iframe src="{{ $company_info['google_map_link'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd' }}" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 text-lg-end">
                    <div class="faq-thumb2 mb-xl-0 mb-50">
                        <div class="about-counter-grid jump">
                            <img src="{{ asset('assets/img/icon/faq2-counter-icon-1.svg') }}" alt="img">
                            <div class="media-right">
                                <h3 class="about-counter"><span class="counter-number">{{ $contact_data['about_counter'] ?? ''}}</span>+</h3>
                                <h4 class="about-counter-text">{{ $contact_data['about_counter_text'] ?? ''}}</h4>
                            </div>
                        </div>
                        <img src="{{ (new App\Helpers\GeneralHelper())->fetchImageUrl($contact_data['about_counter_image']) ?? asset('assets/img/normal/faq-thumb-2-1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap p-0">
                        <div class="title-area">
                            <span class="sub-title">Contact form
                            </span>
                            <h2 class="sec-title">Get a Best Quote</h2>
                            @if(session('success'))
                              <div class="alert alert-success">
                                   {{ session('success') }}
                              </div>
                              @endif
                        </div>
                        <form action="{{ route('contact-us.submit') }}" method="POST" class="appointment-form">
                         @csrf

                         <div class="row">

                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                   </div>
                              </div>

                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                   </div>
                              </div>

                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="text" class="form-control" name="number" placeholder="Phone Number">
                                   </div>
                              </div>

                              <div class="col-md-6">
                                   <div class="form-group">
                                        <select name="subject" class="form-select" required>
                                             <option value="">Choose a Service</option>
                                             <option value="Staff Augmentation Services">Staff Augmentation Services</option>
                                             <option value="Data Automation Services">Data Automation Services</option>
                                             <option value="Data Entry Service">Data Entry Service</option>
                                             <option value="Adobe Photoshop Services">Adobe Photoshop Services</option>
                                             <option value="CAD Services">CAD Services</option>
                                             <option value="Engineering Design Service">Engineering Design Service</option>
                                             <option value="Engineering Documentation Services">Engineering Documentation Services</option>
                                             <option value="Healthcare BPO Services">Healthcare BPO Services</option>
                                             <option value="Image Retouching Service">Image Retouching Service</option>
                                             <option value="Insurance Outsourcing">Insurance Outsourcing</option>
                                             <option value="Market Research and Financial Services">Market Research and Financial Services</option>
                                             <option value="Real Estate Image Editing Service">Real Estate Image Editing Service</option>
                                             <option value="Scanning and Indexing Services">Scanning and Indexing Services</option>
                                             <option value="Telecom Survey Services">Telecom Survey Services</option>
                                             <option value="Virtual Assistant Service">Virtual Assistant Service</option>
                                             <option value="Wedding Image Editing Services">Wedding Image Editing Services</option>
                                        </select>
                                   </div>
                              </div>

                              <div class="form-group col-12">
                                   <textarea name="message" class="form-control" placeholder="Message here.." required></textarea>
                              </div>

                              <div class="form-btn col-12">
                                   <button type="submit" class="btn style2">
                                        Submit
                                   </button>
                              </div>

                         </div>
                         </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>


    <div class="container">
        <div class="footer-top-1 bg-dark" style="background-image: url({{asset('assets/img/bg/footer-top-bg1-1.png')}});">
            <div class="footer-logo">
                <a href="index.html"><img src="{{(new App\Helpers\GeneralHelper())->fetchImageUrl($company_info['company_logo']) ?? asset('assets/img/logo-white.svg') }}" alt="Fixturbo"></a>
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