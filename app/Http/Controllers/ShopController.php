<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        {
            return view('Shop');
        }
    }

    public function show() {
        {
            return view('product');
        }
    }
}
