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

    <script type="text/javascript">
      $( function() {
        $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"}).val();
      });
    </script>

    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Tambah Surat Keluar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-file-text-o"></i>  <a href="{{ url('/suratkeluar') }}">Surat Keluar</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus-square"></i> Tambah Surat Keluar
                            </li>
                        </ol>
                    </div>
                </div>
   
           @if(Session::has('message'))
           <span class="label label-danger">{{Session::get('message')}}</span>
           @endif

     
            <div class="col-xs-5" >
                {{ Form::open(['url' => '/prosestambahsk','files'=>'true']) }}

                {!! csrf_field() !!}

                <label>Nomor Surat</label>
                {{ Form::text('nomor', '', ['placeholder'=>'Nomor Surat','class' => 'form-control']) }}
                <p></p>
                <label>Tanggal</label>
                <div class="input-group date col-xs-8"> 
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    {!! Form::text('tanggal', '', ['placeholder'=>'Tanggal', 'id' => 'datepicker','class' => 'form-control']) !!}
                </div>
                <p></p>
                <label>Tujuan</label>
                {{ Form::text('tujuan', '', ['placeholder'=>'Tujuan','class' => 'form-control']) }}
                <p></p>
                <label>Perihal</label>
                {{ Form::text('perihal', '', ['placeholder'=>'Perihal','class' => 'form-control']) }}
                <p></p>
                <label>Isi Surat</label>
                {{ Form::textarea('isi', '', ['placeholder'=>'Isi Surat','class' => 'form-control', 'size' => '30x5']) }}
                <p></p>
                <label>File</label>
                {{ Form::file('_file', ['class'=>'filestyle', 'data-placeholder' => 'No file', 'data-size' => 'm']) }} 
                 <p></p>
                {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>             
       
    </div>
</div>
@stop