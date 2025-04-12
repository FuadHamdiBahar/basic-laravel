<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function posIndex(){
        $products = Product::all();
        return view('pos.index', [
            'products'=>$products
        ]);
    }

    public function listTransaction(){
        return view('transaction.list');
    }
}
