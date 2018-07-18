@extends('layouts/t_Welcome')

@section('content')

<style type="text/css">
            body{
                background-image: url("asset/bg.jpg");
                background-color: #fff;
                background-repeat: no-repeat;
            }

            .content {
                text-align: center;
                padding-left: 150px;
                padding-right: 150px;
            }

            .title {
                text-align: center;
                padding-top: 100px;
                color: #fff;
                font-size: 4em;
                font-weight: bold;
                font-family: 'Roboto', sans-serif;
            }

            .isi{
                padding-top: 130px;

            }
        

            .navbar-default
            {
                background: none;
                border-color: #2e2e2e;
            }  

           .glyphicon.glyphicon-globe {
                font-size: 40px;
                opacity: 0.2;
            }
            .glyphicon.glyphicon-wrench{
                font-size: 40px;
                opacity: 0.2;
            }
            .glyphicon.glyphicon-cog{
                font-size: 40px;
                opacity: 0.2;
            }
            .glyphicon.glyphicon-list-alt{
                font-size: 40px;
                opacity: 0.2;
            }
</style>


<div class="content">
    <div class="title m-b-md">
        <font color="4fea4f">Aplikasi Pengarsipan Surat</font>
        <h3><font color="#fff">Dinas Kebersihan dan Pertamanan Kota Binjai</font></h3>
    </div>
    <div class="isi">
                <div class="row">
                    <div class="col-lg-4 text-center">
                       
                            <div class="panel-body" style="border-left: 1px dashed #cdcecd;border-right: 1px dashed #cdcecd;">
                                <h3><font color="#5cb85c"> <i class="fa fa-fw fa-file-text"></i><b>Surat Masuk</b></font></h3>
                                <font color="#5d5e5d"> Surat masuk adalah semua surat dinas yang diterima oleh Dinas Kebersihan dan Pertamanan Kota Binjai. Untuk memudahkan pengendalian dan pengelolaan surat masuk, maka pencatatan surat masuk dilakukan oleh admin di dalam aplikasi.</font>
                            </div>
                    
                    </div>
                    <div class="col-lg-4 text-center">
                      
                            <div class="panel-body" style="border-left: 1px dashed #cdcecd;border-right: 1px dashed #cdcecd;" >
                                 <h3><font color="#d9534f"><i class="fa fa-fw fa-file-text-o"></i><b>Surat Keluar</b></font></h3>
                                  <font color="#5d5e5d"> Surat keluar adalah surat yang dikeluarkan/dibuat oleh Dinas Kebersihan dan Pertamanan Kota Binjai untuk dikirimkan kepada pihak lain. Semua informasi surat keluar akan dicatat dalam aplikasi oleh admin.</font>
                            </div>
                    
                    </div>
                    <div class="col-lg-4 text-center">
                     
                            <div class="panel-body" style="border-left: 1px dashed #cdcecd;border-right: 1px dashed #cdcecd;">
                                 <h3><font color="#337ab7" ><i class="fa fa-fw fa-file-o"></i><b>Disposisi</b></font></h3>
                                 <font color="#5d5e5d"> Disposisi adalah surat masuk yang memiliki status disposisi. Disposisi akan dicatat oleh sekretaris dalam aplikasi berupa nomor agenda, tanggal agenda, tujuan dan keterangan.</font>
                            </div>
                        
                    </div
                </div> 
     </div>
    <br/>
    <br/>
    <div id="footer">
       © Copyright 2017 Aplikasi Pengarsipan Surat
      <p><font size="2px;">Dinas Kebersihan dan Pertamanan Kota Binjai</font></p>
    </div>
    </div>
</div>
    

@endsection