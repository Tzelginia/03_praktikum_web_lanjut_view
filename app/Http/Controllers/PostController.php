<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function product(){
        $allproduct = Product::all();

        return view('products')
        ->with('title','Product Kita')
        ->with('all_product',$allproduct);
    }
}
