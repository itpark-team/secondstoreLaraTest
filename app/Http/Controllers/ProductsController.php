<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getByCategoryId($id)
    {
        $findProducts = Product::where('category_id', '=', $id)->get();

        return view('products.getByCategoryId')->with('products', $findProducts);
    }
}
