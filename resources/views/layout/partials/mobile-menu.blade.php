@php
    $data = app('App\Helpers\GeneralHelper')->getCompanyData('company-info');
    $company_info = $data[0]['acf'] ?? [];    
@endphp

<div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="{{(new App\Helpers\GeneralHelper())->fetchImageUrl($company_info['general_settings']['company_logo']) ?? asset('assets/img/logo-white.svg')}}" alt="Fixturbo"></a>
                <button class="menu-toggle"><i class="fa fa-times"></i></button>
            </div>
            <div class="mobile-menu">
                <ul>
                    @foreach(config('menu.main') as $item)
                        @include('components.mobile-menu-item', ['item' => $item])
                    @endforeach
                </ul>
            </div>
        </div>
    </div>