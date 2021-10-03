<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id')->with('ProductImages');
    }

    public function CartItems(){
        $session_id = session()->getId();
        $cartobj=new Cart();
        return $cartobj->where('session_id',$session_id)->with('product')->latest()->get();
    }

    public function CartItemsForMobile($session_id){
      $session_id = $session_id;
        $cartobj=new Cart();
        return $cartobj->where('session_id',$session_id)->with('product')->latest()->get();
    }
}
