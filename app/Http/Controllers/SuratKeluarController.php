<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
Use Redirect;
use View;

class SuratKeluarController extends Controller
{
   public function index()
   {
   		return view('suratkeluar.suratkeluar');
   }

   public function daftarsuratkeluar()
   {
   		$checkernav = 3;

   		$suratkeluar=DB::table('t_outbox')->get();

   		return view('suratkeluar.suratkeluar', compact('checkernav','suratkeluar'));
   }

   public function tambahsuratkeluar(Request $request)
   {
   	  $file = $request->file('_file');   	 

      if(empty($file))
      {
        $data = array(
        'nomor_sk' => Input::get('nomor'),
        'tanggal_sk' => Input::get('tanggal'),
        'tujuan' => Input::get('tujuan'),
        'perihal_sk' => Input::get('perihal'),
        'isi_sk' => Input::get('isi'),
        );

        DB::table('t_outbox')->insert($data);
      }
      else
      {
        $destinationPath = 'file/suratkeluar';
        $path = $destinationPath.'/'.$file->getClientOriginalName();

        $data = array(
        'nomor_sk' => Input::get('nomor'),
        'tanggal_sk' => Input::get('tanggal'),
        'tujuan' => Input::get('tujuan'),
        'perihal_sk' => Input::get('perihal'),
        'isi_sk' => Input::get('isi'),
        'file_sk' => $path,
        );

        DB::table('t_outbox')->insert($data);

        //Move Uploaded File
  	    $file->move($destinationPath,$file->getClientOriginalName());
      }

    	return Redirect::to('suratkeluar')->with('message','berhasil menambah data');
   }

   public function detailsuratkeluar($id_sk)
   {
      $data = DB::table('t_outbox')->where('id_sk','=',$id_sk)->first();

      return View::make('suratkeluar.detail_sk')->with('suratkeluar',$data);
   }

   public function editsuratkeluar($id_sk)
   {
      $data = DB::table('t_outbox')->where('id_sk','=',$id_sk)->first();

      return View::make('suratkeluar.form_edit_sk')->with('suratkeluar',$data);
   }

   public function proseseditsuratkeluar(Request $request)
   {
      $file = $request->file('_file');     

      if(empty($file))
      {
        $data = array(
        'nomor_sk' => Input::get('nomor'),
        'tanggal_sk' => Input::get('tanggal'),
        'tujuan' => Input::get('tujuan'),
        'perihal_sk' => Input::get('perihal'),
        'isi_sk' => Input::get('isi'),
        );

         DB::table('t_outbox')->where('id_sk','=',Input::get('id_sk'))->update($data);
      }
      else
      {
        $destinationPath = 'file/suratkeluar';
        $path = $destinationPath.'/'.$file->getClientOriginalName();
        
        $data = array(
        'nomor_sk' => Input::get('nomor'),
        'tanggal_sk' => Input::get('tanggal'),
        'tujuan' => Input::get('tujuan'),
        'perihal_sk' => Input::get('perihal'),
        'isi_sk' => Input::get('isi'),
        'file_sk' => $path,
        );

        DB::table('t_outbox')->where('id_sk','=',Input::get('id_sk'))->update($data);
       
          //Move Uploaded File
        $file->move($destinationPath,$file->getClientOriginalName());
      }

      return Redirect::to('suratkeluar')->with('message','berhasil mengedit data');
   }

   public function hapussuratkeluar($id_sk)
   {
      $data = DB::table('t_outbox')->where('id_sk','=',$id_sk)->delete();

      return Redirect::to('suratkeluar')->with('message','berhasil menghapus data');
   }

}
