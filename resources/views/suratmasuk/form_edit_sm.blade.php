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
                          Edit Surat Masuk
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-file-text"></i>  <a href="{{ url('/suratmasuk') }}">Surat Masuk</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Edit Surat Masuk
                            </li>
                        </ol>
                    </div>
                </div>
   
           @if(Session::has('message'))
           <span class="label label-danger">{{Session::get('message')}}</span>
           @endif

     
            <div class="col-xs-5" >
                {{ Form::open(['url' => '/proseseditsm','files'=>'true']) }}

                {!! csrf_field() !!}

                {{ Form::hidden('id_sm',$suratmasuk->id_sm,['class'=>'form-control'])}}

                <label>Nomor Surat</label>
                {{ Form::text('nomor', $suratmasuk->nomor_sm, ['placeholder'=>'Nomor Surat','class' => 'form-control']) }}
                <p></p>
                <label>Tanggal</label>
                <div class="input-group date col-xs-8"> 
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                    {!! Form::text('tanggal', $suratmasuk->tanggal_sm, ['placeholder'=>'Tanggal', 'id' => 'datepicker','class' => 'form-control']) !!}
                   
                </div>
                <p></p>
                <label>Pengirim</label>
                {{ Form::text('pengirim', $suratmasuk->pengirim, ['placeholder'=>'Pengirim','class' => 'form-control']) }}
                <p></p>
                <label>Perihal</label>
                {{ Form::text('perihal', $suratmasuk->perihal_sm, ['placeholder'=>'Perihal','class' => 'form-control']) }}
                <p></p>
                <label>Isi Surat</label>
                {{ Form::textarea('isi', $suratmasuk->isi_sm, ['placeholder'=>'Isi Surat','class' => 'form-control', 'size' => '30x5']) }}
                <p></p>
                <label>Status</label>
                <div class="form-group">
                @if($suratmasuk->status=='Arsip')
                <select name="status" class="form-control">
                    <option value="Arsip" selected>Arsip</option>
                    <option value="Disposisi">Disposisi</option>
                </select>
                @else
                 <select name="status" class="form-control">
                    <option value="Arsip">Arsip</option>
                    <option value="Disposisi" selected>Disposisi</option>
                </select>
                @endif
                </div>
                <p></p>
                <label>File</label>
                {{ Form::file('_file',['class'=>'filestyle', 'data-placeholder' =>  $suratmasuk->file_sm, 'data-size' => 'm']) }} 
                 <p></p>
                {{ Form::submit('Ubah', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>             
       
    </div>
</div>
@stop