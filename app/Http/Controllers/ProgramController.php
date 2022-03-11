<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return view('program.karir');
    }

    public function magang() {
        return view('program.magang');
    }

    public function kunjungan_industri() {
        return view('program.kunjunganIndustri');
    }
     public function program(){
        return view('program')
        ->with('title','Program Kita');
    }
}
