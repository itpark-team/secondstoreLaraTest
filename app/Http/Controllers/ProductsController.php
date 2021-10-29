<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getByCategoryId($id)
    {
        $findProducts = DB::table('products')->where('category_id', '=', $id)->get();


        return view('products.getByCategoryId')->with('products', $findProducts);
    }
}
