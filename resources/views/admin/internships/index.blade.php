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
                                {{-- <h2>{{ __('Coupon') }}</h2> --}}
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('Coupon') }}</li>
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
                            <h2>{{ __('internship List') }}</h2>
                            <a href="{{ route('coupon.create') }}" class="btn btn-success btn-sm"> <i
                                    class="fa fa-plus"></i> {{ __('Add Coupon') }} </a>
                        </div>
                        <div class="customers__table">
                            <!DOCTYPE html>
                            <html>

                            <head>
                                <title>Internships</title>
                            </head>

                            <body>

                                <h1>Internships</h1>

                                <table id="customers-table" class="row-border data-table-filter table-style">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Title') }}</th>
                                            <th>{{ __('Experience Needed') }}</th>
                                            <th>{{ __('Career Level') }}</th>
                                            <th>{{ __('Education Level') }}</th>
                                            <th>{{ __('Salary') }}</th>
                                            <th>{{ __('description') }}</th>
                                            <th>{{ __('requirements') }}</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($internships as $internship)
                                            <tr class="removable-item">
                                                <td>{{ $internship->title }}</td>
                                                <td>{{ $internship->experience_needed }}</td>
                                                <td>{{ $internship->career_level }}</td>
                                                <td>{{ $internship->education_level }}</td>
                                                <td>{{ $internship->salary }}</td>
                                                <td>{{ $internship->description }}</td>
                                                <td>{{ $internship->requirements }}</td>

                                                <td>
                                                    <form action="{{ route('internships.destroy', $internship) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this internship?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </body>

                            </html>
                            <div class="mt-3">
                                {{-- {{ $coupons->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page content area end -->
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.min.css') }}">
@endpush

@push('script')
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom/data-table-page.js') }}"></script>
@endpush
