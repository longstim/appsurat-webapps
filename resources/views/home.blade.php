@extends('layouts.app')

@section('content')

<style type="text/css">
    
#panelsurat{
    color: #2e2e2e;
    font-size: 17px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    padding-right: 5px;
}

</style>
    <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Selamat Datang di Aplikasi Pengarsipan Surat
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
           @if(Auth::user()->role=='admin')
               <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-file-text fa-2x"></i><font size="5px"><b>Surat Masuk</b></font>
                            </div>
                            <div  id="panelsurat">
                            Surat masuk adalah semua surat dinas yang diterima oleh Dinas Kebersihan dan Pertamanan Kota Binjai. Untuk memudahkan pengendalian dan pengelolaan surat masuk, maka pencatatan surat masuk dilakukan oleh admin di dalam aplikasi.
                            </div>
                            <a href="{{ url('/suratmasuk') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-4 text-center">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-file-text-o fa-2x"></i><font size="5px"><b>Surat Keluar</b></font>
                            </div>
                            <div  id="panelsurat">
                          Surat keluar adalah surat yang dikeluarkan/dibuat oleh Dinas Kebersihan dan Pertamanan Kota Binjai untuk dikirimkan kepada pihak lain. Semua informasi surat keluar akan dicatat dalam aplikasi oleh admin.
                            </div>
                            <a href="{{ url('/suratkeluar') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-file-o fa-2x"></i><font size="5px"><b>Disposisi</b></font>
                            </div>
                            <div  id="panelsurat">
                           Disposisi adalah surat masuk yang memiliki status disposisi. Disposisi akan diisi oleh sekretaris dalam aplikasi berupa nomor agenda, tanggal agenda, tujuan dan keterangan.
                            </div>
                            <a href="{{ url('/disposisi') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @else
               <div class="col-lg-4 text-center">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-file-o fa-2x"></i><font size="5px"><b>Disposisi</b></font>
                            </div>
                            <div  id="panelsurat">
                           Disposisi adalah surat masuk yang memiliki status disposisi. Disposisi akan diisi oleh sekretaris dalam aplikasi berupa nomor agenda, tanggal agenda, tujuan dan keterangan.
                            </div>
                            <a href="{{ url('/disposisi') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            @endif

            </div>
    </div>
@endsection
