
@extends('layouts.frontend.master')


@section('content')

{{-- <section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">FEATURED PRODUCTS <span class="badge badge-secondary">Shopping Now</span>
                <a class="float-right text-secondary" href="{{route('products')}}">View All</a>
            </h5>
        </div>

        <div class="row">
            @foreach ($featuredProducts as $product)
            <div class="col-md-3 col-xs-12 mb-4">
                @component('frontend.components.productCard',['product'=>$product])

                @endcomponent
            </div>
            @endforeach



        </div>
    </div>
</section>
<section class="offer-product">
    <div class="container">
        <div class="row no-gutters">
           <div class="col-md-6">
                <a href="{{route('products')}}" ><img  class="img-fluid"  src="frontend\img\ad\1.jpg" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="{{route('products')}}" ><img  class="img-fluid"  src="frontend\img\ad\2.jpg" alt=""></a>
            </div>

        </div>
    </div>
</section>
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">LATEST PRODUCTS <span class="badge badge-info">Shopping Now</span>
                <a class="float-right text-secondary" href="{{route('products')}}">View All</a>
            </h5>
        </div>

        <div class="row">
            @foreach ($latestProducts as $product)
            <div class="col-md-3 col-xs-12 mb-4">
                @component('frontend.components.productCard',['product'=>$product])

                @endcomponent
            </div>
            @endforeach



        </div>
    </div>
</section>
<section class="offer-product">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6">
                <a href="{{route('products')}}" ><img  class="img-fluid"  src="frontend\img\ad\1.jpg" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="{{route('products')}}" ><img  class="img-fluid"  src="frontend\img\ad\2.jpg" alt=""></a>
            </div>

        </div>
    </div>
</section>
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">{{config('app.name')}} <span class="badge badge-info">Shopping Now</span>
                <a class="float-right text-secondary" href="{{route('products')}}">View All</a>
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($randomProducts as $product)


            <div class="item">
                @component('frontend.components.productCard',['product'=>$product,'title_limit'=>20 ,'unitbox'=>10])

                @endcomponent
            </div>

            @endforeach


        </div>
    </div>
</section> --}}

<div class="page-content">
	<div id="shopify-section-1586608150816" class="shopify-section index-section index-section--flush">
	<div class="holder fullwidth fullboxed mt-0 full-nopad">
		<div class="container">
			<div class="bnslider-wrapper">
				<div class="bnslider keep-scale" data-start-width='1920' data-start-height='785' data-start-mwidth='414' data-start-mheight='736' id="bnslider-1586608150816" data-autoplay="true" data-speed="5000">
					<a href="#" target="_self" class="bnslider-slide ">
						<div class="bnslider-image-mobile lazyload fade-up-fast" data-bgset="images/skins/electronics/slider/slide-electronics-01-m.webp" data-sizes="auto"></div>
						<div class="bnslider-image lazyload fade-up-fast" data-bgset="images/skins/electronics/slider/slide-electronics-01.webp" data-sizes="auto"></div>
						<div class="bnslider-text-wrap bnslider-overlay container">
							<div class="bnslider-text-content txt-middle txt-left txt-middle-m txt-center-m">
								<div class="bnslider-text-content-flex  container ">
									<div class="bnslider-vert w-s-60 w-ms-80 p-0">
										<div class="bnslider-text order-2 mt-sm bnslider-text--xl text-center" data-animation="fadeInUp" data-animation-delay="800" data-fontcolor="#363b4b" data-bgcolor="" data-fontweight="600" data-fontline="1.00" data-otherstyle="">EAR PHONES</div>
										<div class="bnslider-text order-3 mt-sm bnslider-text--sm text-center" data-animation="zoomIn" data-animation-delay="1000" data-fontcolor="#ffffff" data-bgcolor="" data-fontweight="500" data-fontline="1.5" data-otherstyle="">Enjoy with superb portability</div>
										<div class="bnslider-text order-1 mt-0 bnslider-text--md text-center" data-animation="fadeInDown" data-animation-delay="1600" data-fontcolor="#5378f4" data-bgcolor="" data-fontweight="600" data-fontline="1.00" data-otherstyle="">$799</div>
										<div class="btn-wrap text-center  order-4 mt-md" data-animation="fadeInUp" data-animation-delay="2000">
											<div class="btn btn--lg">Shop now</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" target="_self" class="bnslider-slide ">
						<div class="bnslider-image-mobile lazyload fade-up-fast" data-bgset="images/skins/electronics/slider/slide-electronics-02-m.webp" data-sizes="auto"></div>
						<div class="bnslider-image lazyload fade-up-fast" data-bgset="images/skins/electronics/slider/slide-electronics-02.webp" data-sizes="auto"></div>
						<div class="bnslider-text-wrap bnslider-overlay container">
							<div class="bnslider-text-content txt-middle txt-right txt-middle-m txt-center-m">
								<div class="bnslider-text-content-flex  container ">
									<div class="bnslider-vert w-s-60 w-ms-80 p-0">
										<div class="bnslider-text order-2 mt-sm bnslider-text--xxxl text-center" data-animation="fx4" data-animation-delay="800" data-fontcolor="#ffffff" data-bgcolor="" data-fontweight="700" data-fontline="1.1" data-otherstyle="">QLED</div>
										<div class="bnslider-text order-2 mt-0 bnslider-text--xl text-center" data-animation="fx2" data-animation-delay="1000" data-fontcolor="#ffffff" data-bgcolor="" data-fontweight="500" data-fontline="1.1" data-otherstyle="">MONITORS</div>
										<div class="bnslider-text order-3 mt-sm bnslider-text--sm text-center" data-animation="fadeInDown" data-animation-delay="1600" data-fontcolor="#ffffff" data-bgcolor="" data-fontweight="400" data-fontline="1.3" data-otherstyle="">Special designed for games</div>
										<div class="btn-wrap text-center  order-4 mt-md" data-animation="fadeIn" data-animation-delay="2000">
											<div class="btn btn--lg" data-color="#464b5c" data-bgcolor="#ffd800" data-hover-color="#ffffff" data-hover-bgcolor="#464b5c" style="color:#464b5c; background-color:#ffd800">Shop now</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="bnslider-loader"></div>
				<div class="bnslider-arrows d-sm-none container"><div></div></div>
				<div class="bnslider-dots d-none d-sm-block container"></div>
			</div>
		</div>
	</div>
</div>


@endsection
