<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index(){
        $mhs = "Ikhwanudin Aldi Wibowo";
        return view('mhs/index',compact('mhs'));
    }

    public function show(){
        $mhs = ['Adeeva','nadia','Zahra'];
        return view('mhs/show', compact('mhs'));
    }
}
