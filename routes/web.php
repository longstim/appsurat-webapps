<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/suratmasuk', 'SuratMasukController@daftarsuratmasuk');

Route::get('/tambahsuratmasuk', function () {
	$checkernav=2;
    return view('suratmasuk.form_tambah_sm',compact('checkernav'));
});

Route::post('prosestambahsm','SuratMasukController@tambahsuratmasuk');

Route::get('detailsm/{id_sm}','SuratMasukController@detailsuratmasuk');

Route::get('editsm/{id_sm}','SuratMasukController@editsuratmasuk');

Route::post('proseseditsm','SuratMasukController@proseseditsuratmasuk');

Route::get('hapussm/{id_sm}','SuratMasukController@hapussuratmasuk');


Route::get('/suratkeluar', 'SuratKeluarController@daftarsuratkeluar');

Route::get('/tambahsuratkeluar', function () {
	$checkernav=3;
    return view('suratkeluar.form_tambah_sk',compact('checkernav'));
});

Route::post('/prosestambahsk', 'SuratKeluarController@tambahsuratkeluar');

Route::get('detailsk/{id_sk}','SuratKeluarController@detailsuratkeluar');

Route::get('editsk/{id_sk}','SuratKeluarController@editsuratkeluar');

Route::post('proseseditsk','SuratKeluarController@proseseditsuratkeluar');

Route::get('hapussk/{id_sk}','SuratKeluarController@hapussuratkeluar');


Route::get('/disposisi', 'DisposisiController@daftarsuratmasuk');

Route::get('detailsmdisposisi/{id_smd}','DisposisiController@detailsuratmasukdisposisi');

Route::get('tambahdisposisi/{id_smd}','DisposisiController@tambahdisposisi');

Route::post('prosestambahdisposisi','DisposisiController@prosestambahdisposisi');

Route::get('editdisposisi/{id_sm}/{id_dis}','DisposisiController@editdisposisi');

Route::post('proseseditdisposisi','DisposisiController@proseseditdisposisi');

Route::get('detaildisposisi/{id_sm}/{id_dis}','DisposisiController@detaildisposisi');

