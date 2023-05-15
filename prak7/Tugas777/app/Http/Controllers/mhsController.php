<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    public function index(){
        $mhs ="Nadia";
        return view('mhs/index',compact('mhs'));
    }

    public function show(){
        $mhs= ['Adeeva','Nadia','Zahra'];
        return view('mhs/show', compact('mhs'));
    }

    public function perulangan(){
        $mhs= ['Adeeva','Nadia','Zahra'];
        return view('mhs/perulangan', compact('mhs'));
    }
}


