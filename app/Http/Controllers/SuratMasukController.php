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

class SuratMasukController extends Controller
{
   public function index()
   {
   		return view('suratmasuk.suratmasuk');
   }

   public function daftarsuratmasuk()
   {
   		$checkernav = 2;

   		$suratmasuk=DB::table('t_inbox')->get();

   		return view('suratmasuk.suratmasuk', compact('checkernav','suratmasuk'));
   }

   public function tambahsuratmasuk(Request $request)
   {
   	  $file = $request->file('_file');   	 

      if(empty($file))
      {
        $data = array(
        'nomor_sm' => Input::get('nomor'),
        'tanggal_sm' => Input::get('tanggal'),
        'pengirim' => Input::get('pengirim'),
        'perihal_sm' => Input::get('perihal'),
        'isi_sm' => Input::get('isi'),
        'status' => Input::get('status'),
        );

        DB::table('t_inbox')->insert($data);
      }
      else
      {
        $destinationPath = 'file/suratmasuk';
        $path = $destinationPath.'/'.$file->getClientOriginalName();

        $data = array(
        'nomor_sm' => Input::get('nomor'),
        'tanggal_sm' => Input::get('tanggal'),
        'pengirim' => Input::get('pengirim'),
        'perihal_sm' => Input::get('perihal'),
        'isi_sm' => Input::get('isi'),
        'status' => Input::get('status'),
        'file_sm' => $path,
        );

        DB::table('t_inbox')->insert($data);

        //Move Uploaded File
  	    $file->move($destinationPath,$file->getClientOriginalName());
      }

    	return Redirect::to('suratmasuk')->with('message','berhasil menambah data');
   }

   public function detailsuratmasuk($id_sm)
   {
      $data = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();

      return View::make('suratmasuk.detail_sm')->with('suratmasuk',$data);
   }

   public function editsuratmasuk($id_sm)
   {
      $data = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();

      return View::make('suratmasuk.form_edit_sm')->with('suratmasuk',$data);
   }

    public function proseseditsuratmasuk(Request $request)
   {
      $file = $request->file('_file');     

      if(empty($file))
      {
        $data = array(
        'nomor_sm' => Input::get('nomor'),
        'tanggal_sm' => Input::get('tanggal'),
        'pengirim' => Input::get('pengirim'),
        'perihal_sm' => Input::get('perihal'),
        'isi_sm' => Input::get('isi'),
        'status' => Input::get('status'),
        );

         DB::table('t_inbox')->where('id_sm','=',Input::get('id_sm'))->update($data);
      }
      else
      {
        $destinationPath = 'file/suratmasuk';
        $path = $destinationPath.'/'.$file->getClientOriginalName();
        
        $data = array(
        'nomor_sm' => Input::get('nomor'),
        'tanggal_sm' => Input::get('tanggal'),
        'pengirim' => Input::get('pengirim'),
        'perihal_sm' => Input::get('perihal'),
        'isi_sm' => Input::get('isi'),
        'status' => Input::get('status'),
        'file_sm' => $path,
        );

        DB::table('t_inbox')->where('id_sm','=',Input::get('id_sm'))->update($data);
       
          //Move Uploaded File
        $file->move($destinationPath,$file->getClientOriginalName());
      }

      return Redirect::to('suratmasuk')->with('message','berhasil mengedit data');
   }

   public function hapussuratmasuk($id_sm)
   {
      $data = DB::table('t_inbox')->where('id_sm','=',$id_sm)->delete();

      return Redirect::to('suratmasuk')->with('message','berhasil menghapus data');
   }
}
