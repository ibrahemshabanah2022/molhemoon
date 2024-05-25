@extends('frontend.layouts.app')
@section('meta')
    @php
        $metaData = getMeta('course');
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
    <div class="bg-page">
        <!-- Course Single Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="page-banner-content text-center">
                                <h3 class="page-banner-heading text-white pb-15">{{ __('Molhemoon Internships') }}
                                </h3>
                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a
                                                href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page">
                                            {{ __('Molhemoon Internships') }}
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
        <!-- Course Single Page Header End -->

        <!-- Courses Page Area Start -->
        <section class="courses-page-area section-t-space">

            <div class="row shop-content">
                <!-- Courses Sidebar start-->


                <!-- Courses Sidebar End-->
                <!-- Show all course area start-->


                <section class="faq-area support-tickets-page section-t-space">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center">

                            </div>
                        </div>


                        <!-- Tab Content-->
                        @foreach ($internships as $internship)
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <button class="accordion-button font-medium font-18" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $internship->id }}"
                                                aria-expanded="false" aria-controls="collapse{{ $internship->id }}">
                                                {{ $internship->title }}
                                            </button>
                                            <div id="collapse{{ $internship->id }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $internship->id }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>Experience:</strong>{{ $internship->experience_needed }} |
                                                    <strong>Career Level:</strong>{{ $internship->career_level }} |
                                                    <strong>Education Level:</strong>{{ $internship->education_level }}
                                                </div>
                                                <div class="accordion-body">
                                                    <a
                                                        href="{{ route('MolhemoonSingleIntern', ['id' => $internship->id]) }}">

                                                        <button type="button"
                                                            class="theme-btn theme-button1 theme-button3 mr-30">Show
                                                            Details</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Render the pagination links -->
                        <div class="flex flex-wrap items-center justify-center gap-x-1 text-xs font-semibold ">

                            {{ $internships->links() }}
                        </div>


                    </div>
                </section>

                <!-- Show all course area End-->
            </div>

    </div>
    </section>
    <!-- Courses Page Area End -->

    </div>
@endsection
