@extends('layouts.dasson.master')
@section('title') Daftar Peserta Pelatihan @endsection
@section('css')
<link href="{{ URL::asset('dasson/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('dasson/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('dasson/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}"
    rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Daftar Peserta Pelatihan @endslot
@slot('title') Total Peserta Pelatihan ({{ count($data) }}) @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Peserta Pelatihan</h4>
            </div>
            <div class="card-body">
                @include('notif')
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Whatsapp</th>
                            <th>Pelatihan</th>
                            <th>Alamat</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($data as $peserta_pelatihan )
                        @if (isset($peserta_pelatihan->nama_peserta))

                        <tr>
                            <td>{{ $peserta_pelatihan->nama_peserta }}</td>
                            <td>{{ $peserta_pelatihan->wa }}</td>
                            <td>{{ $peserta_pelatihan->pelatihan }}</td>
                            <td>{{ $peserta_pelatihan->alamat }}</td>
                            <td>{{ $peserta_pelatihan->tgl_pendaftaran }}</td>
                            <td>
                                @if ($peserta_pelatihan->status =='Menunggu')
                                <span class="badge bg-primary">{{ $peserta_pelatihan->status }}</span>
                                @elseif ($peserta_pelatihan->status =='Diterima')
                                <span class="badge bg-success">{{ $peserta_pelatihan->status }}</span>
                                @else
                                <span class="badge bg-danger">{{ $peserta_pelatihan->status }}</span>
                                @endif

                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ url(Auth::user()->role.'/penerimaan-pelatihan/terima/'.$peserta_pelatihan->id_pelatihan) }}"
                                        onclick="return confirm('Anda Yakin Akan Menerima {{ $peserta_pelatihan->nama_peserta }} Sebagai Peserta Pelatihan ?');"
                                        class="btn btn-soft-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle"></i>
                                    </a>
                                    <a href="{{ url(Auth::user()->role.'/penerimaan-pelatihan/tolak/'.$peserta_pelatihan->id_pelatihan) }}"
                                        onclick="return confirm('Anda Yakin Akan Menolak {{ $peserta_pelatihan->nama_peserta }} Sebagai Peserta Pelatihan ?');"
                                        class="btn btn-soft-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- end cardaa -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('dasson/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-buttons/datatables.net-buttons.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script>
<script src="{{ URL::asset('dasson/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.js') }}">
</script>
<script src="{{ URL::asset('dasson/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('dasson/js/app.min.js') }}"></script>
@endsection