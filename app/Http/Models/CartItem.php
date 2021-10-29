<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, "cart_items_product_id_foreign");
    }
}