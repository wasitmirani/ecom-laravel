<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartView extends Component
{
    public $cart,$discountSum,$subtotal;
    public function render()
    {
        $cartobj=new Cart();
        $this->cart=$cartobj->CartItems();
        $this->subtotal=$this->cart->sum(function($q){
            return $q->qty*$q->unitPrice;
        });
        $this->discountSum=$this->cart->sum(function($q){
            return $q->discount_price;
        });
        return view('livewire.cart-view');
    }

    public function Removeitem($id){
        $session_id = session()->getId();
        $cartobj=new Cart();
        $cartobj->where(['id'=>$id,'session_id'=>$session_id])->delete();
        $this->cart=$cartobj->CartItems();
        $this->subtotal=$this->cart->sum(function($q){
            return $q->qty*$q->unitPrice;
        });
        $this->discountSum=$this->cart->sum(function($q){
            return $q->discount_price;
        });
    }
}
