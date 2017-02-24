<?php
use App\Mahasiswa;
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
//memanggil ViewController di folder Controller
Route::get('/home','ViewController@home');
Route::get('/tambah','ViewController@tambah');
Route::get('/ubah','ViewController@ubah');
Route::get('/login','ViewController@login');

//memanggil welcome.blade.php di folder views
Route::get('/',function() {
return view('welcome');
});

//menginputkan ke tabel mahasiswa di database kampus
Route::get('/tambahdb',function () {
$mahasiswa = new Mahasiswa;
$mahasiswa -> nama = "YudaPB";
$mahasiswa -> nim = "14111107";
$mahasiswa -> alamat = "Majalaya";
$mahasiswa -> save ();
echo "<b>DATA BERHASIL DISIMPAN</b>";
});

//mengubah isi tabel mahasiswa
Route::get('/ubahdb',function () {
$mahasiswa = Mahasiswa::find(2);
$mahasiswa -> nama = "YudaPradanaBagaswara";
$mahasiswa -> nim = "14111107";
$mahasiswa -> alamat = "Bandung-Majalaya";
$mahasiswa -> save ();
echo "<b>DATA BERHASIL DIUBAH</b>";
});

//menampilkan tabel mahasiswa
Route::get('/tampildb',function () {
$mahasiswa = Mahasiswa::all();
foreach($mahasiswa as $mhs)
{
echo "<br> <b>Nama</b> : ";
echo $mhs->nama;
echo "<br> <b>NIM</b> : ";
echo $mhs->nim;
echo "<br> <b>Alamat</b> : ";
echo $mhs->alamat;
}
});

//menghapus isi tabel mahasiswa
Route::get('/hapusdb',function () {
$mahasiswa = Mahasiswa::find(4);
$mahasiswa-> delete();
echo "<b>DATA BERHASIL DIHAPUS</b>";
});

Route::get('UTS.home', 'ViewController@tampilisidatabase');