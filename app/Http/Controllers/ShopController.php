<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    public function index() {
        {
            $products = DB::select('select * from products');
            return view('Shop', ['products'=>$products]);
        }
    }

  



    public function show() {
        {
            return view('product');
        }
    }
}
