<?php

namespace App\Http\Controllers\Api\Order;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiOrderController extends Controller
{
    //
    public function proccedOrder(Request $request){
       $orderToken=Str::random(6);
        $session_id = request('token');
        $cartobj=new Cart();
        $mycart=$cartobj->CartItemsForMobile($session_id);
        
        $subtotal=$mycart->sum(function($q){
            return $q->qty*$q->unitPrice;
        });
        $totaldiscount=$mycart->sum(function($q){
            return $q->discount_price;
        });
        $totalactualprice=$mycart->sum(function($q){
            return $q->actualPrice;
        });
         $neworder=Order::create([
            'name'=>$request->name,
            'order_token'=>$orderToken,
            'user_phone'=>$request->phone,
            'user_id'=>!empty(Auth::user()->id) ? Auth::user()->id : null,
            'user_email'=>$request->email,
            'address'=>$request->address.", ".$request->zip_code.", ".$request->city.", ".$request->state.", ".$request->country,
            'order_notes'=>$request->ordernotes,
            'total_actualprice'=>$totalactualprice,
            'total_unitprice'=>$subtotal,
            'total_discount'=>$totaldiscount,
            'status'=>1,
        ]);
        $this->confirmOrder($mycart, $neworder,$session_id);
        return response()->json(['orderpocced'=>200]);
    }
    public function confirmOrder($mycart,$order,$session){
  DB::beginTransaction();
    try 
    {
        foreach ($mycart as  $item) {
            OrderDetails::create([
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'name'=>$item->name,
                'qty'=>$item->qty,
                'units'=>$item->units,
                'unitPrice'=>$item->unitPrice,
                'actualPrice'=>$item->actualPrice,
                'discount_price'=>$item->discount_price,
            ]);
        }
       $neworder= OrderDetails::where('order_id',$order->id)->get();

        $session_id =$session;
        $cartobj=new Cart();
        $mycart=$cartobj->where('session_id',$session_id)->delete();
     DB::commit();
    }catch (\Exception $e) {
        // Rollback Transaction
        DB::rollback();
    }
} 
} 

