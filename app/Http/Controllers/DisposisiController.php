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

class DisposisiController extends Controller
{
    public function index()
   {
   		return view('disposisi.disposisi');
   }

   public function daftarsuratmasuk()
   {
   		$checkernav = 4;

   		$suratmasuk=DB::table('t_inbox')->where('status','=','Disposisi')->get();
   

   		return view('disposisi.disposisi', compact('checkernav','suratmasuk'));
   }

   public function detailsuratmasukdisposisi($id_sm)
   {
      $suratmasuk = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();
      $disposisi = DB::table('t_disposisi')->where('id_sm','=',$id_sm)->first();

      return view('disposisi.detail_sm_disposisi',compact('suratmasuk','disposisi'));
   }

   public function tambahdisposisi($id_sm)
   {
   	  $suratmasuk = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();
      $disposisi = DB::table('t_disposisi')->where('id_sm','=',$id_sm)->first();

      return view('disposisi.form_tambah_disposisi',compact('suratmasuk','disposisi'));
   }

   public function prosestambahdisposisi()
   {
	    $data = array(
	        'no_agenda' => Input::get('no_agenda'),
	        'id_sm' => Input::get('id_sm'),
	        'pengirim' => Input::get('pengirim'),
	        'tanggal_dis' => Input::get('tanggal_dis'),
	        'tujuan' => Input::get('tujuan'),
	        'instruksi' => Input::get('instruksi'),
	        );

	    DB::table('t_disposisi')->insert($data);
		
		return Redirect::to('detailsmdisposisi/'.Input::get('id_sm'))->with('message','berhasil menambah data');
	}


   public function editdisposisi($id_sm,$id_dis)
   {
      $suratmasuk = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();
      $disposisi = DB::table('t_disposisi')->where('id_dis','=',$id_dis)->first();

      return view('disposisi.form_edit_disposisi',compact('suratmasuk','disposisi'));
   }


   public function proseseditdisposisi()
   {
	    $data = array(
	        'no_agenda' => Input::get('no_agenda'),
	        'id_sm' => Input::get('id_sm'),
	        'pengirim' => Input::get('pengirim'),
	        'tanggal_dis' => Input::get('tanggal_dis'),
	        'tujuan' => Input::get('tujuan'),
	        'instruksi' => Input::get('instruksi'),
	        );

	    DB::table('t_disposisi')->where('id_dis','=',Input::get('id_dis'))->update($data);
		
		return Redirect::to('detailsmdisposisi/'.Input::get('id_sm'))->with('message','berhasil mengedit data');
	}

	public function detaildisposisi($id_sm, $id_dis)
   {
   	  $suratmasuk = DB::table('t_inbox')->where('id_sm','=',$id_sm)->first();
      $disposisi = DB::table('t_disposisi')->where('id_dis','=',$id_dis)->first();

      return view('disposisi.detail_disposisi',compact('suratmasuk','disposisi'));
   }
}
