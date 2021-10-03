<div class="cart-list-product">
    <a class="float-right remove-cart" role="button" onclick="removeItem({{$item->id}})"> <i class="mdi mdi-close"></i></a>

    <img class="img-fluid" src="{{!empty($item->product->productImages[0]) ? $item->product->productImages[0]->thumbnail : productImage("")}}" alt="">

     @if(!empty($item->product->category))
    <span class="badge badge-success">{{$item->product->category->name}}</span>
    @endif
    <h5><a href="{{route('product.view',['id'=>$item->product->id,'slug'=>$item->product->slug])}}">{{Str::limit($item->product->name, 40, '....')}}</a></h5>
    <h6 class="text-success"><span class="mdi mdi-basket"> <strong> {{$item->qty}} X  </strong> </span> <span class="float-right"><b>{{env('CURRENCY')}}{{$item->qty*$item->unitPrice}}</b></span></h6>
    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{Str::limit($item->product->quantityPerUnit,  35,'....')}}</h6>
    <p class="offer-price mb-0">
        {{env('CURRENCY')}}{{ $item->product->unitPrice-$item->product->discount_price}}
        <i class="mdi mdi-tag-outline"></i>

        @if($item->product->discount_price>0)
        <span class="regular-price">{{env('CURRENCY')}}{{$item->product->unitPrice}}</span>
        @endif
    </p>
</div>
