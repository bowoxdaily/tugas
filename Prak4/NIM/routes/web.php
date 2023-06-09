<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;

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

Route::get('/show/{id}', function($id){
    echo "Nilai GET parameter id =".$id;
});

Route::get('/edit/{nama}', function($nama){
    echo "Nilai GET parameter nama =".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/start', function(){
    echo "<a href='".route('coba')."'>Start</a>";
})->name('start');

Route::get('/coba', function(){
    echo "<a href='".route('start')."'>kembali</a>";
})->name('coba');

Route::get('/mhs',[mhsController::class,'index'])->name('mhs');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/prodi', 'ProdiController@index')->name('prodi');
