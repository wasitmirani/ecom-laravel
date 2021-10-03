
<div>
    @if($cart->count()<1)
     <h4 class="mt-4 mb-4">Cart Is Empty<a href="{{route('products')}}" class="text-info">  Go to shopping</a> </h4>
    @endif

        @foreach ($cart as $item)
        @if(!empty($item->product))

        @component('frontend.components.cartItems',['item'=>$item])

        @endcomponent
        @endif
        @endforeach

        @if($cart->count()>0)
        <input type="hidden" name="totalcart" id="updatecart" value="{{ $cart->count()}}">
        @else
        <input type="hidden" name="totalcart" id="updatecart" value="0">
        @endif
        @if(!empty($subtotal))
        <input type="hidden" name="totalcart" id="updatesubtotal" value="{{$subtotal}}">
        @else
        <input type="hidden" name="totalcart" id="updatesubtotal" value="0">
        @endif
        @if($discountSum>0)
        <input type="hidden" name="totalcart" id="updatediscountTotal" value="{{$discountSum}}">
        @else
        <input type="hidden" name="totalcart" id="updatediscountTotal" value="0">
        @endif
</div>
