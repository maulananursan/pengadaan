<?php

/*
panduan cara membuatan route
ketik Route::get/post('/namaRoute_bisa bebas','namaControllernya_sesual controller@') 

*/
Route::get('/','Home@index');
//route registrasi
Route::get('/registrasi','Registrasi@index');
//simpan data regis
Route::post('/regis','Registrasi@regis');
//route halaman login suplier
Route::get('/login','Suplier@login');
//route masuk suplier
Route::post('/masukSuplier','Suplier@masukSuplier');
//route logout suplier
Route::get('/suplierKeluar','Suplier@suplierKeluar');
//route masuk admin
Route::get('/masukAdmin','Admin@index');

//route login admin
Route::post('/loginAdmin','Admin@loginAdmin');

//route Generate admin
Route::get('/adminGenerate','Admin@adminGenerate');

//route pengajuan admin
Route::get('/pengajuan','Pengajuan@pengajuan');

//route keluar admin
Route::get('/keluarAdmin','Admin@keluarAdmin');

//route list admin');
Route::get('/listAdmin','Admin@listAdmin');

//route tambah admin
Route::post('/tambahAdmin','Admin@tambahAdmin');

//route tambah admin
Route::post('/ubahAdmin','Admin@ubahAdmin');

//route hapus admin
Route::get('/hapusAdmin/{id}','Admin@hapusAdmin');

//route list pengadaan
Route::get('/listPengadaan','Pengadaan@index');

//route tambah pengadaan
Route::post('/tambahPengadaan','Pengadaan@tambahPengadaan');

//route hapus gambar Pengadaan
Route::get('/hapusGambarPengadaan/{id}','Pengadaan@hapusGambarPengadaan');

//route update gambar pengadaan
Route::post('/tambahGambarPengadaan','Pengadaan@tambahGambarPengadaan');

//route hapus Pengadaan
Route::get('/hapusPengadaan/{id}','Pengadaan@hapusPengadaan');

//route update pengadaan
Route::post('/ubahPengadaan','Pengadaan@ubahPengadaan');

//route list suplier
Route::get('/listSuplier','Pengadaan@listSuplier');

//route tambah pengajuan
Route::post('/tambahPengajuan','Pengajuan@tambahPengajuan');

//route terima pengajuan
Route::get('/terimaPengajuan/{id}','Pengajuan@terimaPengajuan');

//route tolak pengajuan
Route::get('/tolakPengajuan/{id}','Pengajuan@tolakPengajuan');

//route riwayat pengajuan
Route::get('/riwayatPengajuan','Pengajuan@riwayatPengajuan');

//route tambah laporan
Route::post('/tambahLaporan','Pengajuan@tambahLaporan');

//route laporan pengajuan
Route::get('/laporanPengajuan','Pengajuan@laporanPengajuan');

//route selesai pengajuan
Route::get('/selesaiPengajuan/{id}','Pengajuan@selesaiPengajuan');

//route selesai pengajuan
Route::get('/pengajuanSelesai','Pengajuan@pengajuanSelesai');

//route tolak laporan
Route::get('/tolakLaporan/{id}','Pengajuan@tolakLaporan');

//route menmapilkan suplier yang terdaftar
Route::get('/listSup','Suplier@listSup');

//route nonaktikan suplier
Route::get('/nonAktif/{id}','Suplier@nonAktif');

//route aktivasi suplier
Route::get('/aktivasiSup/{id}','Suplier@aktivasiSup');

//route ubah password suplier
Route::post('/ubahPasswordSup','Suplier@ubahPassword');

//route ubah password admin
Route::post('/ubahPasswordAdm','Admin@ubahPasswordAdm');

