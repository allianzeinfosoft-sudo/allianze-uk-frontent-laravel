@extends('layout.app')

@section('meta_title', $seo_data['title'] ?? 'Default Title')
@section('meta_description', $seo_data['description'] ?? 'Default Description')

@section('content')
@php
     $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
     $author = $post['_embedded']['author'][0]['name'] ?? 'Admin';
     $date = isset($post['date']) ? \Carbon\Carbon::parse($post['date']) : now();
@endphp
<div class="breadcumb-wrapper">
     <!-- bg animated image/ -->   
     <div class="container">
          <div class="row">
               <div class="col-lg-6">
               <div class="breadcumb-content">
                    <h1 class="breadcumb-title">{!! $post['title']['rendered'] !!}</h1>
                    <ul class="breadcumb-menu">
                         <li><a href="{{route('blogs')}}">Blog</a></li>
                         <li class="active">Blog Details</li>
                    </ul>
               </div>
               </div>
               <div class="col-lg-6 d-lg-block d-none">
               <div class="breadcumb-thumb">
                    <img src="{{$image ?? asset('assets/img/normal/breadcrumb-thumb.png') }}" alt="img">
               </div>            
               </div>
          </div>
     </div>
</div>

<section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                         
                         <div class="blog-single-card">
                              <div class="blog-thumb">
                                   <img src="{{ $image }}" alt="">
                              </div>
                              <div class="blog-content">
                                   <div class="blog-meta">
                                        <span>By {{ $author }}</span>
                                   </div>
                                   <h3>
                                        {!! $post['title']['rendered'] !!}
                                   </h3>
                                   <p>
                                        {!! Str::limit(strip_tags($post['excerpt']['rendered']), 120) !!}
                                   </p>

                              </div>
                         </div>
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h3 class="widget_title">Search</h3>
                              <form class="search-form" method="GET" action="{{ url('/blogs') }}">
                                   <input type="text" name="search" placeholder="Search" value="{{ request('search') }}">
                                   <button type="submit">
                                        <i class="fas fa-search"></i>
                                   </button>
                              </form>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Category</h3>
                            <ul>
                              @foreach($categories as $cat)
                                   <li>
                                        <a href="?category={{ $cat['id'] }}">
                                             {{ $cat['name'] }}
                                             <span>({{ $cat['count'] }})</span>
                                        </a>
                                   </li>
                              @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Popular post</h3>
                            <div class="recent-post-wrap">
                              @foreach($recentPosts as $post)
                              @php
                              $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '';
                              $date = \Carbon\Carbon::parse($post['date']);
                              @endphp

                              <div class="recent-post">

                              <div class="media-body">
                                   <h4 class="post-title">
                                        <a href="{{ $post['link'] }}">
                                             {!! $post['title']['rendered'] !!}
                                        </a>
                                   </h4>

                                   <div class="recent-post-meta">
                                        {{ $date->format('M d, Y') }}
                                   </div>
                              </div>

                              <div class="media-img">
                                   <a href="{{ $post['link'] }}">
                                        <img src="{{ $image }}">
                                   </a>
                              </div>
                              </div>
                              @endforeach

                            </div>
                        </div>

                        @if ($tags)     
                         <div class="widget widget_tag_cloud">
                              <h3 class="widget_title">Tags</h3>
                              <div class="tagcloud">
                                   @foreach($tags as $tag)
                                   <a href="?tag={{ $tag['id'] }}">
                                        {{ $tag['name'] }}
                                   </a>
                                   @endforeach
                                   </div>
                         </div>   
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </section>    

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