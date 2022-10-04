@extends('layouts.dasson.master')
@section('title') @lang('Blank') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter Page @endslot
@endcomponent
@endsection
@section('script')
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
@endsection