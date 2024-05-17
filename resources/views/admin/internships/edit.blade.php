{{-- @extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Internship</h2>

        <form action="{{ route('internships.update', $internship) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $internship->title }}"
                    required>
            </div>
            <div class="form-group">
                <label for="experience_needed">Experience Needed</label>
                <input type="text" name="experience_needed" id="experience_needed" class="form-control"
                    value="{{ $internship->experience_needed }}" required>
            </div>
            <div class="form-group">
                <label for="career_level">Career Level</label>
                <input type="text" name="career_level" id="career_level" class="form-control"
                    value="{{ $internship->career_level }}" required>
            </div>
            <div class="form-group">
                <label for="education_level">Education Level</label>
                <input type="text" name="education_level" id="education_level" class="form-control"
                    value="{{ $internship->education_level }}" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control" value="{{ $internship->salary }}"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $internship->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="requirements">Requirements</label>
                <textarea name="requirements" id="requirements" class="form-control" required>{{ $internship->requirements }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection --}}
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
                                <h2>{{ __('Add Internship') }}</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('coupon.index') }}">{{ __('Add Internships') }}</a></li>
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
                            <h2>{{ __('Add Coupon') }}</h2>
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
