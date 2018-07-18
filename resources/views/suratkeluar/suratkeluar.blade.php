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
</style>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Surat Keluar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-text-o"></i> Surat Keluar
                            </li>
                        </ol>
                    </div>
                </div>

                <a href="{{ url('/tambahsuratkeluar') }}" class="btn btn-primary btn-lg" role="button">Tambah Surat Keluar</a>

                @if(Session::has('message'))
                    <span class="label label-danger">{{ Session::get('message') }}</span>
                @endif

                <p></p>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat Keluar</th>
                            <th>Tanggal</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Isi</th>
                            <th></th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($suratkeluar as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $data->nomor_sk }}</td>
                            <td align="center">{{ $data->tanggal_sk }}</td>
                            <td>{{ $data->tujuan }}</td>
                            <td>{{ $data->perihal_sk }}</td>
                            <td>{{ $data->isi_sk }}</td>
                            <td align="center">
                                <a href="detailsk/{{$data->id_sk}}"><i class="fa fa-eye"></i></a>
                                <a href="editsk/{{$data->id_sk}}"><i class="fa fa-edit"></i></a>
                                <a href="hapussk/{{$data->id_sk}}"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
@endsection
