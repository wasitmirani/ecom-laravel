<?php

namespace App\Http\Controllers\Api\Cart;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCartController extends Controller
{
    //
    public function addToCart(Request $request){
        $qty=!empty(request('qty')) ? request('qty') :1;
        $session_id = request('token');
        $cartobj=new Cart();
        $product = Product::where('id',$request->product_id)->first();
        if(empty($product))
        return response()->json('error',403);
        $checkCart= $cartobj->where(['product_id'=>$product->id,'session_id'=>$session_id])->first();
        if(!empty($checkCart->product_id)){
            $updatedQty=$checkCart->qty+ $qty;
            $cartobj->where(['product_id'=>$product->id,'session_id'=>$session_id])->update(['qty' =>$updatedQty]);
        }
        else {
            $cartobj->create([
                'product_id'=>$product->id,
                'session_id'=>$session_id,
                'name'=>$product->name,
                'unitPrice' => $product->unitPrice,
                'actualPrice' => $product->actualPrice,
                'discount_price'=>$product->discount_price,
                'units'=>$product->quantityPerUnit,
                'qty' => $qty,
            ]);
        }


        $totalCart=$cartobj->where('session_id',$session_id)->get()->count();
        // $cartItems=$cartobj->CartItemsForMobile($session_id);

        return response()->json(['name'=>$product->name,'totalcart'=>$totalCart],200);

    }
    public function myCart(){
        $session_id = request('token');
        $cartobj=new Cart();
        $cartItems=$cartobj->CartItemsForMobile($session_id);
        $subtotal=$cartItems->sum(function($q){
            return $q->qty*$q->unitPrice;
        });
        $totaldiscount=$cartItems->sum(function($q){
            return  $q->qty*$q->discount_price;
        });
    return response()->json(['mycart'=>$cartItems,'total'=>$subtotal,'discount'=>$totaldiscount],200);
    }
    public function removeCart(Request $request){
    $session_id = request('token');
        $cartobj=new Cart();
        $cartobj->where(['id'=>$request->id,'session_id'=>$session_id])->delete();
        $cart=$cartobj->where('session_id',$session_id)->with('product')->latest()->get();
        $subtotal=$cart->sum(function($q){
            return $q->qty*$q->unitPrice;
        });
        $discountSum=$cart->sum(function($q){
            return $q->discount_price;
        });
       
        $cartItems=$cartobj->CartItemsForMobile($session_id);
         return response()->json(['total'=>$subtotal,'discountSum'=>$discountSum,'mycart'=>$cartItems],200);
    }
}
