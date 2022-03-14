<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    public function index() {
        {
            $products = DB::select('select * from products');
            return view('shop', ['products'=>$products]);
        }
    }

    public function show() {
        {
            return view('product');
        }
    }
}
