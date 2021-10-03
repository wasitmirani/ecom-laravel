<div>

    <div class="my-2 my-lg-0">
        <ul class="list-inline main-nav-right">
            <li class="list-inline-item cart-btn">
                <a role="button" data-toggle="offcanvas"  id="loadcart" class="btn btn-link border-none"><i
                        class="mdi mdi-cart"></i>
                    My Cart <small class="cart-value">{{$this->cart->count()}}</small></a>
            </li>
        </ul>
    </div>
    <div class="cart-sidebar">
        <div class="cart-sidebar-header">
            <h5>
                My Cart <span class="text-success">( <span class="cart-value">{{$this->cart->count()}}</span> item)</span> <a data-toggle="offcanvas" class="float-right" role="button"><i class="mdi mdi-close"></i>
                </a>
            </h5>
        </div>
        <div class="cart-sidebar-body">
        <div id="updateCart">

        </div>
        </div>

        {{-- @if($cart->count()>0) --}}
        <div class="cart-sidebar-footer">
            <div class="cart-store-details">
               <p>Sub Total <strong class="float-right">{{env('CURRENCY')}}<span class="subtotal">00</span> </strong></p>
               {{-- @if($discountSum>0) --}}
               <p>Discount <strong class="float-right text-danger">{{env('CURRENCY')}}<span class="discountTotal">00</span></strong></p>

               <h6>Your total savings <strong class="float-right text-success">{{env('CURRENCY')}}<span class="discountTotal">00</span></strong></h6>
               {{-- @endif --}}
             </div>
                 <a href="{{route('checkout')}}"><button class="btn btn-secondary btn-lg btn-block text-left" type="button">
                   <span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span>
                   <span  class="float-right">{{env('CURRENCY')}}<strong class="totalPrice">00</strong>
                   <span class="mdi mdi-chevron-right"></span></span></button></a>
      </div>
       {{-- @endif --}}

    </div>
</div>


@push('scripts')
<script src="{{asset('js/axios.js')}}"></script>
<script>
    document.addEventListener('livewire:load', function () {


    $("#loadcart").click(function(){

        axios.get('{{route("my-cart")}}').then((res)=>{
            $("#updateCart").empty();
            $("#updateCart").html(res.data);
            let totalcart=document.getElementById('updatecart').value;
           const totaldiscount=document.getElementById('updatediscountTotal').value;
           const subtotal=document.getElementById('updatesubtotal').value;
           const totalPrice=Number(subtotal) - Number(totaldiscount);
            $(".cart-value").text(totalcart);
            $(".subtotal").text(subtotal);
            $('.totalPrice').text(totalPrice);
            $(".discountTotal").text(totaldiscount);
        });
  })

})

function removeItem(id)
  {

        axios.get("{{url('remove/cart/')}}/"+id).then((res)=>{

            $("#updateCart").empty();
            $("#updateCart").html(res.data);
            $("#updateCart2").empty();
            $("#updateCart2").html(res.data);

// updateCart
           let totalcart=document.getElementById('updatecart').value;
           const totaldiscount=document.getElementById('updatediscountTotal').value;
           const subtotal=document.getElementById('updatesubtotal').value;
           const totalPrice=Number(subtotal) - Number(totaldiscount);
           console.log(totalPrice);
            $(".cart-value").text(totalcart);
            $(".subtotal").text(subtotal);
            $('.totalPrice').text(totalPrice);
            $(".discountTotal").text(totaldiscount);

        });
 }
</script>
@endpush
