<div>
    <section class="cart-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body cart-table">
                        <div class="table-responsive">
                            <table class="table cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Avail.</th>
                                        <th>Unit price</th>
                                        <th>Qty</th>
                                        <th>Discount </th>
                                        <th>Total</th>
                                        <th class="action"><i class="mdi mdi-delete-forever"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                    @if(!empty($item->product))
                                    <tr>
                                        <td class="cart_product">
                                            <a href="#"><img class="img-fluid" src="{{!empty($item->product->productImages[0]) ? productImage($item->product->productImages[0]->thumbnail) : productImage("")}} " alt=""></a>
                                        </td>
                                        <td class="cart_description">
                                            <h5 class="product-name"><a href="{{route('product.view',['id'=>$item->product->id,'slug'=>$item->product->slug])}}">{{Str::limit($item->product->name, 40, '....')}}</a></h5>
                                            <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{Str::limit($item->product->quantityPerUnit,  35,'....')}}</h6>
                                        </td>
                                        <td class="availability in-stock"><span class="badge badge-success">{{$item->product->quantityPerUnit}}</span></td>
                                        <td class="price"><span>
                                            {{env('CURRENCY')}}{{ $item->product->unitPrice}}



                                        </span></td>
                                        <td class="qty">
                                            <span class="price">{{$item->qty}}</span>
                                            {{-- <div class="input-group">
                                                <span class="input-group-btn"><button disabled="disabled"
                                                        class="btn btn-theme-round btn-number"
                                                        type="button">-</button></span>
                                                <input type="text" max="10" min="1" value="{{$item->qty}}" class="form-control border-form-control form-control-sm input-number" name="quant[1]">
                                                <span class="input-group-btn"><button
                                                        class="btn btn-theme-round btn-number" type="button">+</button>
                                                </span>
                                            </div> --}}
                                        </td>
                                        <td class="price"><span> {{env('CURRENCY')}}{{ $item->product->discount_price}}
                                        </span></td>
                                        <td class="price"><span>{{env('CURRENCY')}}{{ $item->qty* $item->product->unitPrice}}</span></td>
                                        <td class="action">
                                            <a class="btn btn-sm btn-danger" data-original-title="Remove" role="button" wire:click="Removeitem({{$item->id}})" title="" data-placement="top" data-toggle="tooltip"><i
                                                    class="mdi mdi-close-circle-outline"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    {{-- <tr>
                                        <td colspan="1"></td>
                                        <td colspan="4">
                                            <form class="form-inline float-right">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter discount code" class="form-control border-form-control form-control-sm">
                                                </div>
                                                &nbsp;
                                                <button class="btn btn-success float-left btn-sm" type="submit">Apply</button>
                                            </form>
                                        </td>
                                        <td colspan="2">Discount : $237.88 </td>
                                    </tr> --}}
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-right" colspan="3">Sub Total:</td>
                                        <td colspan="2">{{env('CURRENCY')}}{{$subtotal}}</td>

                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-right" colspan="3">Discount Total:</td>
                                        <td colspan="2">{{env('CURRENCY')}}{{$discountSum}}</td>

                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="5"><strong>Total:</strong></td>
                                        <td class="text-danger" colspan="2"><strong>{{env('CURRENCY')}}{{$subtotal-$discountSum}} </strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <a href="{{route('checkout')}}"><button class="btn btn-secondary btn-lg btn-block text-left"
                                type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to
                                    Checkout </span><span class="float-right"><strong>{{env('CURRENCY')}}{{$subtotal-$discountSum}}</strong> <span
                                        class="mdi mdi-chevron-right"></span></span></button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
