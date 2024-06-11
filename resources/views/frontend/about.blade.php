@extends('frontend.layouts.app')
@section('meta')
    @php
        $metaData = getMeta('about_us');
    @endphp

    <meta name="description" content="{{ __($metaData['meta_description']) }}">
    <meta name="keywords" content="{{ __($metaData['meta_keyword']) }}">

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:type" content="Learning">
    <meta property="og:title" content="{{ __($metaData['meta_title']) }}">
    <meta property="og:description" content="{{ __($metaData['meta_description']) }}">
    <meta property="og:image" content="{{ __($metaData['og_image']) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="{{ __(get_option('app_name')) }}">

    <!-- Twitter Card meta tags for Twitter sharing -->
    <meta name="twitter:card" content="Learning">
    <meta name="twitter:title" content="{{ __($metaData['meta_title']) }}">
    <meta name="twitter:description" content="{{ __($metaData['meta_description']) }}">
    <meta name="twitter:image" content="{{ __($metaData['og_image']) }}">
@endsection
@section('content')
    <!-- Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="page-banner-content text-center">
                            <h3 class="page-banner-heading text-white pb-15">{{ __('About Us') }}</h3>

                            <!-- Breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item font-14"><a
                                            href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                    <li class="breadcrumb-item font-14 active" aria-current="page">{{ __('About Us') }}
                                    </li>
                                </ol>
                            </nav>
                            <!-- Breadcrumb End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Header End -->

    <!-- Gallery Area Start -->
    <section class="our-gallery-area section-t-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3>A youth foundation to develop youth and keep pace with digital
                            development to qualify young people for the labor market</h3>
                    </div><br>
                </div>
            </div>

            {{-- <div class="gallery-img-wrapper">
                <!--Our Gallery image Start-->
                <div class="row shuffle-wrapper">
                    <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                        data-wow-duration="0.5s" data-wow-delay=".25s">
                        <div class="position-relative hover-wrapper">
                            <img src="{{ getImageFile($aboutUsGeneral->gallery_first_image) }}" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                        data-wow-duration="0.5s" data-wow-delay=".25s">
                        <div class="position-relative hover-wrapper">
                            <img src="{{ getImageFile($aboutUsGeneral->gallery_second_image) }}" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                        data-wow-duration="0.5s" data-wow-delay=".25s">
                        <div class="position-relative hover-wrapper">
                            <img src="{{ getImageFile($aboutUsGeneral->gallery_third_image) }}" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                        </div>
                    </div>
                </div>
                <!--Our Gallery image End-->
            </div> --}}

        </div>
    </section>
    <!-- Gallery Area End -->

    <!-- Our History Area Start -->
    <section class="our-history-area bg-page section-t-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="section-heading">Our services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-timeline">
                    <ul>
                        <li>
                            <h6 class="history-year"></h6>
                            <div class="history-content">
                                <h6 class="h6 fw-bold font-18"> online / offline courses
                                </h6>
                                <p class="font-15 pt-1"></p>
                            </div>
                        </li>
                        <li>
                            <h6 class="history-year"></h6>
                            <div class="history-content">
                                <h6 class="h6 fw-bold font-18">confrences and events</h6>
                                <p class="font-15 pt-1"></p>
                            </div>
                        </li>
                        <li>
                            <h6 class="history-year"></h6>
                            <div class="history-content">
                                <h6 class="h6 fw-bold font-18">Summer training
                                </h6>
                                <p class="font-15 pt-1"></p>
                            </div>
                        </li>
                        <li>
                            <h6 class="history-year"></h6>
                            <div class="history-content">
                                <h6 class="h6 fw-bold font-18">Jop opportunities</h6>
                                <p class="font-15 pt-1"></p>
                            </div>
                        </li>
                        <li>
                            <h6 class="history-year"></h6>
                            <div class="history-content">
                                <h6 class="h6 fw-bold font-18">Volunteering opportunities
                                </h6>
                                <p class="font-15 pt-1"></p>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our History Area End -->

    <!-- Upgrade Your Skills Area Start -->
    <section class="upgrade-your-skills-area section-t-space">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="upgrade-skills-left position-relative">
                        <img src="{{ getImageFile(@$aboutUsGeneral->upgrade_skill_logo_path) }}" alt="about"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-6">
                    <div class="upgrade-skills-right">
                        <div class="section-title">
                            <h3 class="section-heading">{{ __(@$aboutUsGeneral->upgrade_skill_title) }}</h3>
                        </div>

                        <!-- section button start-->
                        <div class="col-12 section-btn">
                            <a href="{{ route('courses') }}"
                                class="theme-btn default-hover-btn theme-button1">{{ __(@$aboutUsGeneral->upgrade_skill_button_name) }}
                                <i data-feather="arrow-right"></i></a>
                        </div>
                        <!-- section button end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upgrade Your Skills Area End -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="section-heading">Our Achivements</h3>
                </div>
            </div>
        </div>
        <div class="alert alert-secondary" role="alert">
            Trained more than 1,000 trainees (male and female).
        </div>
        <div class="alert alert-secondary" role="alert">
            Included more than 100 volunteers at the republic level.


        </div>
        <div class="alert alert-secondary" role="alert">
            Provided summer training opportunities for more than 100 trainees.


        </div>
        <div class="alert alert-secondary" role="alert">
            Provided job opportunities by appointing 50 trainees in emerging and large companies in the field of technology
            and communications.


        </div>
        <div class="alert alert-secondary" role="alert">
            Participated in more than 10 conferences aimed at developing young people.


        </div>
        <div class="alert alert-secondary" role="alert">
            Reached more than 20,000 followers on our Facebook page to inspire them.


        </div>
    </div>
    <!-- Our Passionate Team Member Area Start -->
    {{-- <section class="passionate-team-member-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section-left-align-->
                    <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                        <div class="section-title section-title-left d-flex align-items-start">
                            <div class="section-heading-img"><img
                                    src="{{ getImageFile(@$aboutUsGeneral->team_member_logo_path) }}" alt="Our team">
                            </div>
                            <div>
                                <h3 class="section-heading">{{ __(@$aboutUsGeneral->team_member_title) }}</h3>
                                <p class="section-sub-heading">{{ __(@$aboutUsGeneral->team_member_subtitle) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- section-left-align-->
                </div>
            </div>
            <div class="row">
                @foreach ($teamMembers as $teamMember)
                    <!-- Team Member Item start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card instructor-item border-0">
                            <div class="instructor-img-wrap overflow-hidden"><img
                                    src="{{ getImageFile(@$teamMember->image_path) }}" alt="team"></div>
                            <div class="card-body">
                                <h5 class="card-title">{{ __($teamMember->name) }}</h5>
                                <p class="card-text instructor-designation font-medium">{{ __($teamMember->designation) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member Item End-->
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- Our Passionate Team Member Area End -->

    <!-- Course Instructor and Support Area Start -->
    <section class="course-instructor-support-area bg-light section-t-space">
        <div class="container">


            <!-- Client Logo Area start-->
            <div class="row client-logo-area">
                <div class="col" style="background-color: rgb(202, 202, 202);">
                    <div class="client-logo-item text-center">
                        <img src="{{ asset('frontend/assets/img/Capture1.png') }}">
                    </div>
                </div>
                <div class="col" style="background-color: rgb(202, 202, 202);">
                    <div class="client-logo-item text-center">
                        <img src="{{ asset('frontend/assets/img/Capture2 (1).png') }}">
                    </div>
                </div>
                <div class="col" style="background-color: rgb(202, 202, 202);">
                    <div class="client-logo-item text-center">
                        <img src="{{ asset('frontend/assets/img/Capture4.png') }}">
                    </div>
                </div>
                <div class="col" style="background-color: rgb(202, 202, 202);">
                    <div class="client-logo-item text-center">
                        <img src="{{ asset('frontend/assets/img/Capture5.png') }}">
                    </div>
                </div>
                <div class="col" style="background-color: rgb(202, 202, 202);">
                    <div class="client-logo-item text-center">
                        <img src="{{ asset('frontend/assets/img/Capture6.png') }}">
                    </div>
                </div>
            </div>
            <!-- Client Logo Area end-->

        </div>
    </section>
    <!-- Course Instructor and Support Area End -->
@endsection

@push('script')
    <!-- Include Shuffle Plugins -->
    <script src="{{ asset('frontend/assets/js/shuffle.min.js') }}"></script>
    <!-- Include Shuffle Plugins -->

    <!-- Shuffle js filter and masonry Start -->
    <script>
        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;

        var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
            itemSelector: '.shuffle-item',
            buffer: 1
        });

        jQuery('input[name="shuffle-filter"]').on('change', function(evt) {
            var input = evt.currentTarget;
            if (input.checked) {
                myShuffle.filter(input.value);
            }
        });
    </script>
    <!-- Shuffle js filter and masonry Start -->
@endpush
