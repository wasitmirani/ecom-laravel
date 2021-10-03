<div>
    <section class="checkout-page section-padding">
        <div class="container">

            <div class="row">

                 <div class="col-md-8">
                           <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                      Delivery Address
                                </h5>
                            </div>
                          <div class="card-body">
                                    <form wire:submit.prevent="orderprocess">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control  @error('name') is-invalid @enderror" wire:model="name"
                                                           placeholder="First Name" type="text">

                                                           @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control" value=""
                                                           placeholder="Last Name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control @error('phone') is-invalid @enderror" wire:model="phone" value=""
                                                           placeholder="123 456 7890" type="text">
                                                    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email Address <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control @error('email') is-invalid @enderror" wire:model="email" value=""
                                                           placeholder="example@gmail.com"  type="email">
                                                              @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Country <span class="required">*</span></label>
                                                      <input class="form-control border-form-control " wire:model="country"
                                                           placeholder="USA"  type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">City <span
                                                            class="required">*</span></label>
                                                           <input class="form-control border-form-control @error('city') is-invalid @enderror" wire:model="city" value=""
                                                           placeholder="City Name"  type="text">
                                                             @error('city') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Zip Code <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control  @error('zip_code') is-invalid @enderror" value=""
                                                           placeholder="123456" type="text" wire:model="zip_code">
                                                             @error('zip_code') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">State <span
                                                            class="required">*</span></label>
                                                  <input class="form-control border-form-control @error('state') is-invalid @enderror" wire:model="state" value=""
                                                           placeholder="State Name"  type="text">
                                                             @error('state') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Shipping Address <span
                                                            class="required">*</span></label>
                                                    <textarea class="form-control border-form-control @error('address') is-invalid @enderror" wire:model="address"></textarea>
                                                    <small class="text-danger">Please provide the number and
                                                        street.</small>
                                                           @error('address') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Order Note <span
                                                            class="required">*</span></label>
                                                    <textarea class="form-control border-form-control"  wire:model="ordernotes"></textarea>
                                                    <small class="text-danger">Please provide the number and
                                                        street.</small>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>


                                        {{-- <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckbill">
                                            <label class="custom-control-label" for="customCheckbill">Use my delivery
                                                address as my billing address</label>
                                        </div> --}}
                                        <button type="submit" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree" class="btn btn-secondary mb-2 btn-lg">NEXT
                                        </button>
                                    </form>
                                </div>
                           </div>
                 </div>


                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header" wire:ignore.self>My Cart <span class="text-secondary float-right">( <span class="cart-value"> {{$this->cart->count()}}</span> item)</span></h5>
                        <div class="card-body pt-0 pr-0 pl-0 pb-0">
                            <div id="updateCart2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('scripts')
<script src="{{asset('js/axios.js')}}"></script>
<script>
    document.addEventListener('livewire:load', function () {


        axios.get('{{route("my-cart")}}').then((res)=>{
            $("#updateCart2").empty();
            $("#updateCart2").html(res.data);
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


</script>
@endpush
