@extends('layouts/app')

@section('content')

    
    {!! Html::style('asset/js/jquery-ui/jquery-ui.min.css') !!}

    <!-- jQuery -->
    {!! Html::script('asset/js/jquery.js') !!}

    <!-- jQuery UI-->
    {!! Html::script('asset/js/jquery-ui/jquery-ui.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('asset/js/bootstrap.min.js') !!}

    
    <!-- jQuery -->
    {!! Html::script('asset/js/jquery.js') !!}

    <!-- jQuery UI-->
    {!! Html::script('asset/js/jquery-ui/jquery-ui.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('asset/js/bootstrap.min.js') !!}

    <style>
        #myImg {
            border-radius: 1px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .gambar {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        .modal {

            position: fixed; /* Stay in place */
            padding-top: 200px; /* Location of the box */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }

        #disposisitable td{
            border: #bce8f1 solid 1px !important;
        }

        #disposisitable th{
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
                          Detail Surat Masuk {{ $suratmasuk->nomor_sm }}
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-file-o"></i>  <a href="{{ url('/disposisi') }}">Disposisi</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-eye"></i> Detail Surat Masuk Disposisi
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
                            <th>Tanggal</th>
                            <td>{{ $suratmasuk->tanggal_sm }}</td>
                        </tr>
                        <tr>
                            <th>Pengirim</th>
                            <td>{{ $suratmasuk->pengirim }}</td>
                        </tr>
                        <tr>
                            <th>Perihal</th>
                            <td>{{ $suratmasuk->perihal_sm }}</td>
                        </tr>
                        <tr>
                            <th>Isi</th>
                            <td>{{ $suratmasuk->isi_sm }}</td>
                        </tr>
                        <tr>
                            <th>File</th>
                            <td><img class="img-thumbnail" id="myImg" src="{{ url($suratmasuk->file_sm) }}" width="100px" alt=""></td>
                        </tr>
                </table>
            </div>

            <div id="myModal" class="gambar">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('myImg');
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                        modal.style.display = "none";
                    }

                modal.onclick = function() { 
                        modal.style.display = "none";
                    }

            </script>
           
           <h3>Diposisi</h3>

           @if(Session::has('message'))
           <span class="label label-danger">{{Session::get('message')}}</span>
           @endif
           <p></p>
            
             @if(!empty($disposisi))
             <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="disposisitable">
                        <tr>
                            <th>Nomor Agenda</th>
                            <th>Pengirim</th>
                            <th>Tanggal Disposisi</th>
                            <th>Tujuan</th>
                            <th>Instruksi</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td align="center">{{ $disposisi->no_agenda }}</td>
                            <td align="center">{{ $disposisi->pengirim }}</td>
                            <td align="center">{{ $disposisi->tanggal_dis }}</td>
                            <td>{{ $disposisi->tujuan }}</td>
                            <td>{{ $disposisi->instruksi }}</td>
                            <td align="center">
                                <a href="{{ url('detaildisposisi/'.$suratmasuk->id_sm.'/'. $disposisi->id_dis) }}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>

            <div style="text-align: right;">
                @if(Auth::user()->role=='sekretaris')
                <a href="{{ url('editdisposisi/'.$suratmasuk->id_sm.'/'.$disposisi->id_dis) }}" class="btn btn-success" role="button">Edit</a>&nbsp
                @endif
            </div>
                @else
               <div class="table-responsive">
                <table class="table table-bordered table-hover" id="disposisitable">
                        <tr>
                            <th>Nomor Agenda</th>
                            <th>Pengirim</th>
                            <th>Tanggal Disposisi</th>
                            <th>Tujuan</th>
                            <th>Instruksi</th>
                        </tr>
                        <tr>
                            <td align="center">Belum Diisi</td>
                            <td align="center">Belum Diisi</td>
                            <td align="center">Belum Diisi</td>
                            <td align="center">Belum Diisi</td>
                            <td align="center">Belum Diisi</td>
                        </tr>
                    </table>
            </div>
                @if(Auth::user()->role=='sekretaris')
                 <div style="text-align: right;">
                    <a href="{{ url('tambahdisposisi/'.$suratmasuk->id_sm) }}" class="btn btn-primary" role="button">Tambah</a>&nbsp
                </div>
                @endif
            @endif
    </div>
</div>
@stop