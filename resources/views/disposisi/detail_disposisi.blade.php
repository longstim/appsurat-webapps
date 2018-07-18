@extends('layouts/app')

@section('content')

    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Detail Disposisi {{ $suratmasuk->nomor_sm }}
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-file-o"></i>  <a href="{{ url('/disposisi') }}">Disposisi</a>
                            </li>
                            <li>
                                <i class="fa fa-eye"></i>  <a href="{{ url('detailsmdisposisi/'.$suratmasuk->id_sm) }}">Detail Surat Masuk Disposisi</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-th-list"></i> Detail Disposisi
                            </li>
                        </ol>
                    </div>
                </div>

           <div class="table-responsive">
                <table class="table table-hover table-striped">
                        <tr>
                            <th>Nomor Surat Masuk</th>
                            <td>{{ $suratmasuk->nomor_sm }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Agenda</th>
                            <td>{{ $disposisi->no_agenda }}</td>
                        </tr>
                         <tr>
                            <th>Pengirim</th>
                            <td>{{ $disposisi->pengirim }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Disposisi</th>
                            <td>{{ $disposisi->tanggal_dis }}</td>
                        </tr>
                        <tr>
                            <th>Tujuan</th>
                            <td>{{ $disposisi->tujuan }}</td>
                        </tr>
                        <tr>
                            <th>Instruksi</th>
                            <td>{{ $disposisi->instruksi }}</td>
                        </tr>
                </table>
            </div>

             @if(Auth::user()->role=='sekretaris')
            <div style="text-align: right;">
                <a href="{{ url('editdisposisi/'.$suratmasuk->id_sm.'/'.$disposisi->id_dis) }}" class="btn btn-success" role="button">Edit</a>&nbsp
            </div>
            @endif
    </div>
</div>
@stop