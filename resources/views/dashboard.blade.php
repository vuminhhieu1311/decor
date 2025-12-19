@extends('layouts.admin')

@section('css')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => __('messages.dashboard'),
    ])
    <!--end::Content-->
@endsection

@section('js')
    <script src="{{ asset('vendor/moment.js') }}"></script>
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('resources/js/dashboard_1.js') }}"></script>
    <script src="{{ asset('resources/js/dashboard_2.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection
