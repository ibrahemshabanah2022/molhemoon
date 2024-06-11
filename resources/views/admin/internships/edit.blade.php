@extends('layouts.admin')

@section('content')
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                {{-- <h2>{{ __('Add Internship') }}</h2> --}}
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('coupon.index') }}">{{ __('Edit Internships') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title d-flex justify-content-between">
                            {{-- <h2>{{ __('Add Coupon') }}</h2> --}}
                        </div>
                        <form action="{{ route('internships.update', $internship) }}" method="POST"
                            class="form-horizontal"> @method('PUT')
                            @csrf
                            <label for="title">Title:</label><br>
                            <input class="form-control" required type="text" id="title" name="title"
                                value="{{ $internship->title }}"><br>

                            <label for="experience_needed">Experience Needed:</label><br>
                            <input class="form-control" required type="text" id="experience_needed"
                                name="experience_needed" value="{{ $internship->experience_needed }}"><br>

                            <label for="career_level">Career Level:</label><br>
                            <select id="career_level" name="career_level" class="form-control"
                                value="{{ $internship->career_level }}" required>
                                <option value="Entry Level">Entry Level</option>
                                <option value="Mid Level">Mid Level</option>
                                <option value="Senior Level">Senior Level</option>
                                <option value="Executive">Executive</option>
                            </select><br>

                            <label for="education_level">Education Level:</label><br>
                            <select id="education_level" name="education_level" class="form-control"
                                value="{{ $internship->education_level }}" required>
                                <option value="High School">High School</option>
                                <option value="Bachelor Degree">Bachelor Degree</option>
                                <option value="Master Degree">Master Degree</option>
                                <option value="Ph.D.">Ph.D.</option>
                                <option value="Not Specified">Not Specified</option>
                            </select><br>

                            <label for="salary">Salary:</label><br>
                            <input class="form-control" required type="text" id="salary" name="salary"
                                value="{{ $internship->salary }}"><br>

                            <label for="description">Description:</label><br>
                            <textarea id="description" name="description" class="form-control" required>{{ $internship->description }}</textarea><br>

                            <label for="requirements">Requirements:</label><br>
                            <textarea id="requirements" name="requirements" class="form-control" required>{{ $internship->requirements }}</textarea><br>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page content area end -->
    <!-- create.blade.php -->
@endsection

@push('style')
@endpush

@push('script')
    <script src="{{ asset('admin/js/custom/coupon-create.js') }}"></script>
@endpush
