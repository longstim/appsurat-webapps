@extends('layouts.app')

@section('content')

<style>
    .table td{
        border: #bce8f1 solid 1px !important;
    }

    .table th{
        border: #a6c7ce solid 1px !important;
        text-align:center; background:#d9edf7; color:#31708f;
    }
   .modal {

            position: fixed; /* Stay in place */
            padding-top: 200px; /* Location of the box */
        }
</style>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Daftar Surat Masuk Disposisi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-o"></i> Disposisi
                            </li>
                        </ol>
                    </div>
                </div>

                <p></p>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat Masuk</th>
                            <th>Tanggal</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Isi</th>
                            <th></th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($suratmasuk as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $data->nomor_sm }}</td>
                            <td align="center">{{ $data->tanggal_sm }}</td>
                            <td>{{ $data->pengirim }}</td>
                            <td>{{ $data->perihal_sm }}</td>
                            <td>{{ $data->isi_sm }}</td>
                            <td align="center">
                                <a href="detailsmdisposisi/{{$data->id_sm}}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
@endsection
