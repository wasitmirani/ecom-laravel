





<section class="section-padding bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-truck-fast"></i>
                    <h6>Free & Next Day Delivery</h6>
                    <a href="{{route('index')}}"><p>Shopping From  {{ config('app.name')}}</p></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-basket"></i>
                    <h6>100% Satisfaction Guarantee</h6>
                    <a href="{{route('index')}}"><p>Shopping From  {{ config('app.name')}}</p></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-tag-heart"></i>
                    <h6>Great Daily Deals Discount</h6>
                    <a href="{{route('index')}}"><p>Shopping From  {{ config('app.name')}}</p></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer section-padding py-5">
    <div class="container">
        <div class="row py-lg-4">
            <div class="col-xl-2 col-sm-6">
                <div class="footer-brand">
                    <img class="img-fluid" src="{{url('/frontend/img/logo.png')}}">
                </div>
            </div>
            <div class="col-xl-2 col-sm-6">
                <h6 class="mb-4">PRODUCTS</h6>
                <ul>

                    @php
                    $categories=getCategories();
                    @endphp
                    @foreach ($categories as $category)

                    <li><a href="{{route('products',['category'=>Str::slug($category->name, '-'),'category_id'=>$category->id])}}">{{$category->name}}</a></li>

                    @if ($loop->iteration == 9)
                     @break
                     @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6">
                <h6 class="mb-4">SERVICES</h6>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Pagebuilder</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6">
                <h6 class="mb-4">CONNECT</h6>
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Page Builder</a></li>
                    <li><a href="#">UI Kit</a></li>
                    <li><a href="#">Styleguide</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-sm-6">
                <h6 class="mb-4">Subscribe to our Newsletter</h6>
                <form class="form-inline newsletter-form mb-1">
                    <input type="text" class="form-control mr-sm-2" placeholder="Enter your email">
                    <button type="submit" class="btn btn-secondary">Subscribe</button>
                </form>
                <small><a href="#">Register now to get updates on <span class="text-info">Offers and
                            products</span></a></small>
                <div class="app mt-4 pt-2">
                    <h6 class="mb-4">DOWNLOAD APP</h6>
                    <a href="#">
                        <img class="img-fluid" src="frontend\img\google.png">
                    </a>
                    <a href="#">
                        <img class="img-fluid" src="frontend\img\apple.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-4 pb-4 footer-bottom">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-6">
                <p class="mt-1 mb-0">&copy; Copyright 2021 <strong class="text-dark">{{config('app.name')}}</strong>. All Rights Reserved
                    <br>
                    <small class="mt-0 mb-0">Made with <i class="mdi mdi-heart text-danger"></i> by <a
                            href="tel:+923028864119" target="_blank" class="text-primary">CODEX </a>
                    </small>
                </p>
            </div>
            <div class="col-lg-6 col-sm-6 text-right">
                <img alt="osahan logo" src="frontend\img\payment_methods.png">
            </div>
        </div>
    </div>
</section>
