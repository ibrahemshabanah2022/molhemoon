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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title d-flex justify-content-between">
                            <h2>Applied Users for <spsan style="background-color: rgb(218, 218, 218)">
                                    {{ $internship->title }}</spsan> Internship</h2>
                        </div>
                        <div class="customers__table all-course">
                            <table id="" class="row-border data-table-filter table-style">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('CV') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="removable-item">

                                            <td>
                                                {{ $user->name }} </td>
                                            <td>({{ $user->email }}) </td>
                                            <td><span><a href="{{ route('cv.show', $user->id) }}" target="_blank">view
                                                        CV</a></span></td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="mt-3">
                                {{ $instructors->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        {{ $users->links() }}</div>
    <!-- Page content area end -->
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.min.css') }}">
@endpush

@push('script')
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom/data-table-page.js') }}"></script>
    <script src="{{ asset('admin/js/custom/instructor-delete.js') }}"></script>
@endpush


{{-- //////////////////////////
<!DOCTYPE html>
<html>

<head>
    <title>Users Applied for {{ $internship->name }}</title>
</head>

<body>
    <h1>Users Applied for {{ $internship->name }}</h1>

    @if ($internship->users->isEmpty())
        <p>No users have applied for this internship.</p>
    @else
        <ul>
            @foreach ($internship->users as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
    @endif


</body>

</html> --}}
