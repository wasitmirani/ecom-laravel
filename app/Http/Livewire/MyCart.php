<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class MyCart extends Component
{
   public $cart;
    public function render()
    {

        $cartobj=new Cart();
        $this->cart=$cartobj->CartItems();
        return view('livewire.my-cart');
    }
}
