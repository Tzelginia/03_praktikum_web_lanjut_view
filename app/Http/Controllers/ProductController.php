<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cat1(){
        return view('product.marbel-edu-games');
    }

    public function cat2(){
        return view('product.marbel-and-friends-kids-games');
    }

    public function cat3(){
        return view('product.riri-story-books');
    }

    public function cat4(){
        return view('product.kolak-kids-songs');
    }
     public function product(){
        return view('product')
        ->with('title','Product Kita');
    }
}
