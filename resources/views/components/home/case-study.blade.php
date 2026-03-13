@props(['data' => []])

<div class="process-area-2 space-top"
     style="background-image: url('{{ (new \App\Helpers\GeneralHelper())->fetchImageUrl($data['bg_image'] ?? 0) ?? asset('assets/img/bg/process2-bg.png') }}');">

    <div class="container">

        {{-- TITLE --}}
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
                <div class="title-area text-center">

                    <h3 class="sub-title">
                        {{ $data['subtitle'] ?? 'Case Studies' }}
                    </h3>

                    <h2 class="sec-title text-white">
                        {{ $data['title'] ?? 'Real Results From Real Projects' }}
                    </h2>

                </div>
            </div>
        </div>

        {{-- CASE STUDY CARDS --}}
        <div class="row gy-4 gx-90 justify-content-center">
            {{-- Case Study 1 --}}
            @if(!empty($data['case_1']['title']))
                <div class="col-lg-6 col-md-6 process-card-wrap2">
                    <div class="process-card style1 shadow-sm rounded-4 p-4 h-100 transition-all text-start">
                        <!-- Case Label -->
                        <div class="process-card-number badge bg-primary px-3 py-3 mb-3 fw-semibold">
                            {{ $data['case_1']['label'] ?? ''}}
                        </div>
                        <!-- Title -->
                        <h4 class="process-card-title fw-bold mb-3 text-start">
                            {{ $data['case_1']['title'] ?? '' }}
                        </h4>
                        <!-- Content -->
                        <div class="process-card-text text-muted text-start">
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Client:</strong>
                                {{ $data['case_1']['client'] ?? '' }}
                            </p>
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Challenge:</strong>
                                {{ $data['case_1']['challenge'] ?? '' }}
                            </p>
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Solution:</strong>
                                {{ $data['case_1']['solution'] ?? '' }}
                            </p>
                            <p class="mb-0 text-justify">
                                <strong class="text-dark">Result:</strong>
                                {{ $data['case_1']['result'] ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Case Study 2 --}}
            @if(!empty($data['case_2']['title']))
                <div class="col-lg-6 col-md-6 process-card-wrap2">
                    <div class="process-card style1 shadow-sm rounded-4 p-4 h-100 transition-all text-start">
                        <!-- Case Label -->
                        <div class="process-card-number badge bg-primary px-3 py-3 mb-3 fw-semibold">
                            {{ $data['case_2']['label'] ?? ''}}
                        </div>
                        <!-- Title -->
                        <h4 class="process-card-title fw-bold mb-3 text-start">
                            {{ $data['case_2']['title'] ?? '' }}
                        </h4>
                        <!-- Content -->
                        <div class="process-card-text text-muted text-start">
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Client:</strong>
                                {{ $data['case_2']['client'] ?? '' }}
                            </p>
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Challenge:</strong>
                                {{ $data['case_2']['challenge'] ?? '' }}
                            </p>
                            <p class="mb-2 text-justify">
                                <strong class="text-dark">Solution:</strong>
                                {{ $data['case_2']['solution'] ?? '' }}
                            </p>
                            <p class="mb-0 text-justify">
                                <strong class="text-dark">Result:</strong>
                                {{ $data['case_2']['result'] ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
