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
                                    <li class="breadcrumb-item active" aria-current="page">{{ __('Internship List') }}</li>
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

                        </div>
                        <div class="customers__table">
                            <!DOCTYPE html>
                            <html>

                            <head>
                                <title>Internships</title>
                            </head>

                            <body>


                                <table class="row-border data-table-filter table-style">
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
                                                <!-- Assuming this is within a Blade template file -->
                                                <td>
                                                    <textarea name="description" id="description" rows="4" cols="50" style="border: none;" readonly>{{ $internship->description }}</textarea>
                                                </td>
                                                <td>
                                                    <textarea name="requirements" id="requirements" rows="4" cols="50" style="border: none;" readonly>{{ $internship->requirements }}</textarea>
                                                </td>



                                                <td>
                                                    <div class="action__buttons">

                                                        <a href="{{ route('internships.edit', $internship) }}"
                                                            class="btn-action mr-30" title="Edit Details">
                                                            <img src="{{ asset('admin/images/icons/edit-2.svg') }}"
                                                                alt="edit">
                                                        </a>
                                                        <button class="ms-3">
                                                            <span data-formid="delete_row_form_" class="deleteItem">
                                                                <img src="{{ asset('admin/images/icons/trash-2.svg') }}"
                                                                    alt="trash">
                                                            </span>
                                                        </button>

                                                        <form action="{{ route('internships.destroy', $internship) }}"
                                                            method="post" id="delete_row_form_">
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                        </form>
                                                    </div>
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
