@extends('layouts.dasson.master')
@section('title') Daftar User @endsection
@section('css')
<link href="{{ URL::asset('/dasson/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('dasson/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}"
    rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') User @endslot
@slot('title') Daftar User @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Total Pengguna <span class="text-muted fw-normal ms-2">({{
                                    count($data) }})</span>
                            </h5>
                        </div>
                    </div>


                </div>
                <!-- end row -->

                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach ($data as $value)
                            <?php $i++ ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->role }}</td>


                                <td>
                                    <a href="{{ url('hapus-user/'.$value->id) }}"
                                        onclick="return confirm('Apakah Anda Yakin Akan Menghapus {{ $value->name }}?');"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script> --}}
<script src="{{ URL::asset('/dasson/js/app.min.js') }}"></script>
<script src="{{ URL::asset('dasson/js/pages/datatable-pages.init.js') }}"></script>
@endsection