<nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}" style="padding: 4px 16px;"> <img src="{{asset('/frontend/img/logo.png')}}" style="width: 140px; height: 70px; " alt="">
            <small style="color:#44b449;">
          <strong  ></strong>
        </small> </a>
        <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarNavDropdown ">

            <div class="navbar-nav mr-auto mt-5 mt-lg-2 margin-auto top-categories-search-main">
                <form action="{{route('products')}}" method="get">
                <div class="top-categories-search">
                    <div class="input-group">
                        <span class="input-group-btn categories-dropdown">
                            {{-- <select class="form-control-select">
                                <option selected="selected">Your City</option>
                                <option value="0">New Delhi</option>
                                <option value="2">Bengaluru</option>
                                <option value="3">Hyderabad</option>
                                <option value="4">Kolkata</option>
                            </select> --}}
                        </span>

                        <input class="form-control" name="query" required placeholder="Search products" aria-label="Search products" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="mdi mdi-file-find"></i>
                                Search</button>
                        </span>
                    </form>
                    </div>
                </div>
            </form>
            </div>
            @livewire('my-cart')

        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link shop" href="{{route('index')}}"><span class="mdi mdi-store"></span> {{config('app.name')}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link active">Home</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aboutus')}}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contactus')}}" class="nav-link">Contact Us</a>
                </li>

                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('home')}}"><i class="mdi mdi-account"
                                aria-hidden="true"></i> My Profile</a>
                        {{-- <a class="dropdown-item" href="my-address.html"><i class="mdi mdi-chevron-right"
                                aria-hidden="true"></i> My Address</a>
                        <a class="dropdown-item" href="orderlist.html"><i class="mdi mdi-chevron-right"
                                aria-hidden="true"></i> Order List</a> --}}

                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="mdi mdi-logout"
                                aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>
                    </div>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('mycart.view')}}" class="nav-link">My Cart </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
