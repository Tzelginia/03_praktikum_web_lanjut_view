<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(){
        return view('Home')
        ->with('title','Halaman Utama');
    }
}
