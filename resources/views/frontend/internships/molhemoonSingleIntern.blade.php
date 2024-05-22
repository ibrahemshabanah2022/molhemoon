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
                                <h3 class="page-banner-heading text-white pb-15">{{ $internship->title }} Internship
                                </h3>
                                <button class="theme-btn theme-button1 theme-button3 mr-30" data-bs-toggle="modal"
                                    data-bs-target="#becomeAnInstructor"> {{ __('Apply Now') }} <i
                                        data-feather="arrow-right"></i></button>
                                <!-- Become an Instructor Modal Start -->
                                <div class="modal fade becomeAnInstructorModal" id="becomeAnInstructor" tabindex="-1"
                                    aria-labelledby="becomeAnInstructorLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="becomeAnInstructorLabel">
                                                    {{ __('Submit your application') }}</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <form method="POST" action="{{ route('student.save-instructor-info') }}"
                                                class="needs-validation" novalidate enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">



                                                    <div class="row mb-30">
                                                        <div class="col-md-12">
                                                            <label
                                                                class="label-text-title color-heading font-medium font-16 mb-2">CV</label>
                                                            <div class="create-assignment-upload-files">
                                                                <input type="file" name="cv_file"
                                                                    accept="application/pdf" class="form-control" />
                                                                <p
                                                                    class="font-14 color-heading text-center mt-2 color-gray">
                                                                    No file selected (PDF) <span class="d-block">Maximum
                                                                        Image Upload Size is <span
                                                                            class="color-heading">5mb</span></span> </p>
                                                            </div>
                                                            @if ($errors->has('cv_file'))
                                                                <span class="text-danger"><i
                                                                        class="fas fa-exclamation-triangle"></i>
                                                                    {{ $errors->first('cv_file') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="modal-footer d-flex justify-content-center align-items-center">
                                                    <button type="submit"
                                                        class="theme-btn theme-button1 default-hover-btn">{{ __('Submit') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Become an Instructor Modal End -->

                                <form action="{{ route('internship.apply', $internship->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link theme-button1">Apply Now</button>
                                </form>

                                <!-- Breadcrumb Start-->
                                {{-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a
                                                href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page">
                                            {{ __('Molhemoon Internships') }}
                                        </li>
                                    </ol>
                                </nav> --}}
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
                <div class="col-md-4 col-lg-3 col-xl-3  coursesLeftSidebar">

                    <div>
                        <div>
                            <!-- all courses grid Start-->
                            <li class="card p-3">


                                <p><strong>Experience Needed:</strong> {{ $internship->experience_needed }}</p>
                                <p><strong>Career Level:</strong> {{ $internship->career_level }}</p>
                                <p><strong>Education Level:</strong> {{ $internship->education_level }}</p>
                                <p><strong>Salary:</strong> {{ $internship->salary }}</p>

                            </li>
                            <br />

                            <!-- all courses grid End-->

                        </div>
                    </div>

                </div>

                <!-- Courses Sidebar End-->
                <!-- Show all course area start-->
                <div class="col-md-8 col-lg-9 col-xl-9 ">
                    <div class="">
                        <!-- all courses grid Start-->
                        <li class="card p-3">
                            <h6> Description:</h6> <br />
                            <p> {{ $internship->description }}</p>
                            <hr />
                            <h6>Requirements:</h6> <br />
                            <p>{{ $internship->requirements }}</p>
                        </li>
                        <br />
                        {{-- <div id="loading" class="no-course-found text-center d-none">
                            <div id="inner-status"><img src="{{ asset('frontend/assets/img/loader.svg') }}"
                                    alt="img" /></div>
                        </div>
                        <div id="appendCourse">
                            @include('frontend.course.render-course-list')
                        </div> --}}
                        <!-- all courses grid End-->

                    </div>
                </div>
                <!-- Show all course area End-->
            </div>
    </div>
    </section>
    <!-- Courses Page Area End -->
    </div>

    <!-- some important hidden id for filter.js -->
    <input type="hidden" class="route" value="{{ route('getFilterCourse') }}">
    <input type="hidden" class="fetch-data-route" value="{{ route('course.fetch-data') }}">
@endsection
@push('script')
    <script>
        var paginateRoute = "{{ route('courses') }}"
    </script>
    <script src="{{ asset('frontend/assets/js/course/filter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/course/addToCart.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/course/addToWishlist.js') }}"></script>
@endpush
