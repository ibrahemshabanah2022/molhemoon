@extends('frontend.layouts.app')
@push('script')
    <script src="https://www.google.com/recaptcha/api.js?render={{ get_option('recaptcha_site_key', '') }}"></script>
@endpush
@section('meta')
    @php
        $metaData = getMeta('contact_us');
    @endphp

    <meta name="description" content="{{ $metaData['meta_description'] }}">
    <meta name="keywords" content="{{ $metaData['meta_keyword'] }}">

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:type" content="Learning">
    <meta property="og:title" content="{{ $metaData['meta_title'] }}">
    <meta property="og:description" content="{{ $metaData['meta_description'] }}">
    <meta property="og:image" content="{{ $metaData['og_image'] }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="{{ get_option('app_name') }}">

    <!-- Twitter Card meta tags for Twitter sharing -->
    <meta name="twitter:card" content="Learning">
    <meta name="twitter:title" content="{{ $metaData['meta_title'] }}">
    <meta name="twitter:description" content="{{ $metaData['meta_description'] }}">
    <meta name="twitter:image" content="{{ $metaData['og_image'] }}">
@endsection
@section('content')
    <div class="bg-page">
        <!-- Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="page-banner-content text-center">
                                <h3 class="page-banner-heading text-white pb-15">{{ __('Contact Us') }}</h3>

                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a
                                                href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page">
                                            {{ __('Contact Us') }}</li>
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

        <!-- Contact Page Area Start -->
        <section class="contact-page-area section-t-space">
            <div class="container">
                <div class="row">
                    <!-- Contact page left side start-->
                    <div class="col-md-6 col-lg-5 bg-white contact-page-left-side">

                        <div class="contact-page-left-side-wrap">
                            <h5 class="contact-form-title font-24 font-semi-bold">
                                {{ __(get_option('get_in_touch_title')) }}</h5>

                            <!-- Contact Info Item Start-->
                            {{-- <div class="contact-info-item d-flex align-items-center">
                                <div class="flex-shrink-0 contact-icon-img-wrap">
                                    <img src="{{ asset('frontend/assets/img/icons-svg/contact-icon-1.png') }}"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 contact-info-content">
                                    <p>{{ __(get_option('contact_us_location')) }}</p>
                                </div>
                            </div> --}}
                            <!-- Contact Info Item End-->

                            <!-- Contact Info Item Start-->
                            <div class="contact-info-item d-flex align-items-center">
                                <div class="flex-shrink-0 contact-icon-img-wrap">
                                    <img src="{{ asset('frontend/assets/img/icons-svg/contact-icon-2.png') }}"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 contact-info-content">
                                    <p>molhemoon.misr@gmail.com</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End-->

                            <!-- Contact Info Item Start-->
                            {{-- <div class="contact-info-item d-flex align-items-center">
                                <div class="flex-shrink-0 contact-icon-img-wrap">
                                    <img src="{{ asset('frontend/assets/img/icons-svg/contact-icon-3.png') }}"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 contact-info-content">
                                    <p>{{ __(get_option('contact_us_phone_one')) }}</p>
                                    <p>{{ __(get_option('contact_us_phone_two')) }}</p>
                                </div>
                            </div> --}}
                            <!-- Contact Info Item End-->

                            <div class="contact-bottom-content">
                                <p class="color-gray mt-3"> We’re here to help and answer any questions you might
                                    have. We look forward to hearing from you!</p>
                            </div>
                            <br><br>
                            <div>
                                <h5>Follow Us: </h5>
                            </div>
                            <div class="footer-social mt-30">
                                <ul class="d-flex align-items-center">
                                    @if (get_option('facebook_url'))
                                        <li>
                                            <a href="https://web.facebook.com/Molhemoon">
                                                <span class="iconify" data-icon="ant-design:facebook-filled"
                                                    style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif
                                    {{-- @if (get_option('twitter_url'))
                                        <li>
                                            <a href="{{ get_option('twitter_url') }}">
                                                <span class="iconify" data-icon="ant-design:twitter-square-filled" 
                                                      style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif --}}
                                    @if (get_option('linkedin_url'))
                                        <li>
                                            <a href="https://www.linkedin.com/company/molhemoon/posts/?feedView=all">
                                                <span class="iconify" data-icon="ant-design:linkedin-filled"
                                                    style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (get_option('pinterest_url'))
                                        <li>
                                            <a
                                                href="https://www.tiktok.com/@molhemoon?fbclid=IwZXh0bgNhZW0CMTAAAR0kdt_BnYju0IEMLPQ2XdaVy3uz_OuzH3Gc71wa3jqgmQTIE4u4flTJE10_aem_AcrFquyMKENGoYo2RFVwktXU5ZHjIQYnmml-M_sKpWtA-RxykMhp6noZ5cL7y-01k3QL5a3tM0axw88Le6bypQOX">
                                                <span class="iconify" data-icon="iconoir:tiktok" data-width="1em"
                                                    data-height="1em" style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (get_option('pinterest_url'))
                                        <li>
                                            <a href="https://www.instagram.com/molhemoon.eg/">
                                                <span class="iconify" data-icon="fa-brands:instagram-square"
                                                    data-width="1em" data-height="1em"
                                                    style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif
                                    {{-- @if (get_option('pinterest_url'))
                                        <li>
                                            <a href="https://www.instagram.com/molhemoon.eg/">
                                                <span class="iconify" data-icon="fa-brands:youtube-square" data-width="1em" data-height="1em" 
                                                      style="  color: rgb(156, 155, 241);"></span>
                                            </a>
                                        </li>
                                    @endif --}}
                                </ul>
                            </div>


                        </div>

                    </div>
                    <!-- Contact page left side End-->

                    <!-- Contact page right side start-->
                    <div class="col-md-6 col-lg-7 bg-white contact-page-right">
                        <div class="contact-form-area">
                            <h5 class="contact-form-title font-24 font-semi-bold">{{ __(get_option('send_us_msg_title')) }}
                            </h5>
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <input type="text" class="form-control" id="inputName"
                                            placeholder="{{ __('Your name *') }}">
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <input type="email" class="form-control" id="inputEmail"
                                            placeholder="{{ __('Your Email *') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <select id="inputState" class="form-select contact_us_issue_id">
                                            <option value="">{{ __('Select an Issue') }}</option>
                                            @foreach ($contactUsIssues as $issue)
                                                <option value="{{ $issue->id }}">{{ __($issue->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <textarea class="form-control message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button"
                                        class="theme-btn theme-button1 theme-button3 w-100 font-15 fw-bold submitContactUs">{{ __('Submit') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact page right side End-->
                </div>

                <!-- Google Map Part Start-->
                {{-- <div class="row google-map-area section-t-space">
            <div class="col-12">
                <iframe src="{{ get_option('contact_us_map_link') }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div> --}}
                <!-- Google Map Part End-->
            </div>
        </section>
        <!-- Contact Page Area End -->
    </div>
    <input type="hidden" value="{{ route('contact.store') }}" class="contactStoreRoute">
@endsection

@push('script')
    <script src="{{ asset('frontend/assets/js/custom/contact-us-store.js') }}"></script>
@endpush
