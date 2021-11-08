<?php

namespace App\Http\Controllers;

use App\Http\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewAllItemsByUserId($id){
        $cartItems =  CartItem::where('user_id','=', $id)->get();

        return view('cart.viewAllItemsByUserId')->with('cartItems', $cartItems);
    }

    public function addNewItemToUser($productId){
        $user = Session::get('user');
        $userId = $user->id;

        $cartItem = new CartItem();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->save();
    }
}
