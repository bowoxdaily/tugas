<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    $title = "WebBowo.com";
    $slug= "home";
    $konten = "ini adalah Konten WebBowo.com";
    return view('konten.home',compact('title','slug','konten'));
});

Route::get('/home', function () {
    $title = "WebBowo.com";
    $slug= "home";
    $konten = "ini adalah Konten Webbowo.com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/mhs',[mhsController::class,'index'])->name('mhs');

Route::get('/mhs/show',[mhsController::class,'show'])->name('mhs-show');

Route::get('mhs/perulangan',[mhsController::class,'perulangan'])->name('mhs-perulangan');

