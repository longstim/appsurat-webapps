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
                          Tambah Disposisi Surat Masuk {{ $suratmasuk->nomor_sm }}
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
                                <i class="fa fa-plus-square"></i> Tambah Diposisi
                            </li>
                        </ol>
                    </div>
                </div>
   
           @if(Session::has('message'))
           <span class="label label-danger">{{Session::get('message')}}</span>
           @endif

     
            <div class="col-xs-5" >
                {{ Form::open(['url' => '/prosestambahdisposisi','files'=>'true']) }}

                {!! csrf_field() !!}
                {{ Form::hidden('id_sm',$suratmasuk->id_sm,['class'=>'form-control'])}}
                <label>Nomor Surat</label>
                {{ Form::text('nomor_sm', $suratmasuk->nomor_sm, ['placeholder'=>'Nomor Surat','class' => 'form-control','readonly']) }}
                <p></p>
                <label>Nomor Agenda</label>
                {{ Form::text('no_agenda', '', ['placeholder'=>'Nomor Surat','class' => 'form-control']) }}
                <p></p>
                <label>Pengirim</label>
                {{ Form::text('pengirim', $suratmasuk->pengirim, ['placeholder'=>'Pengirim','class' => 'form-control','readonly']) }}
                <p></p>
                <label>Tanggal Disposisi</label>
                <div class="input-group date col-xs-8"> 
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    {!! Form::text('tanggal_dis', '', ['placeholder'=>'Tanggal Disposisi', 'id' => 'datepicker','class' => 'form-control']) !!}
                   
                </div>
                <p></p>
                <label>Tujuan</label>
                {{ Form::text('tujuan', '', ['placeholder'=>'Tujuan','class' => 'form-control']) }}
                <p></p>
                <label>Instruksi</label>
                {{ Form::textarea('instruksi', '', ['placeholder'=>'Instruksi','class' => 'form-control', 'size' => '30x5']) }}
                <p></p>

                {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>             
       
    </div>
</div>
@stop