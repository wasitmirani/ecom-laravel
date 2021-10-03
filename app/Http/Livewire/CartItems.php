<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartItems extends Component
{
    public $cart,$discountSum,$subtotal;
    public function render()
    {
        $cartobj=new Cart();
        $this->cart=$cartobj->CartItems();
        return view('livewire.cart-items');
    }


    public function removeItem($id){
        Cart::destroy($id);
    }
}
