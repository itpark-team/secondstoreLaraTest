<?php

namespace App\Http\Controllers;

use App\Http\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function viewAllItemsByUserId($id){
        $findRows = DB::table('cart_items')->where('user_id', '=', $id)->get();

        $findRow = $findRows[0]->product();

        return view('cart.viewAllItemsByUserId')->with('findRows', $findRow);
    }
}
