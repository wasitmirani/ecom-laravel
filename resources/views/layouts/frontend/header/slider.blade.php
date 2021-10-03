
                <div class="col-lg-9">
                    <div class="carousel-slider-main text-center">
                        <div class="owl-carousel owl-carousel-slider rounded overflow-hidden shadow-sm">
                            @php
                               $silders= getSilderImages();
                            @endphp
                            @foreach ($silders as $item)
                             <div class="item">
                                <a href="{{route('index')}}">
                                <img class="img-fluid" src="{{ sliderImage($item->thumbnail) }}"  alt="">
                            </a>
                            </div>
                            @endforeach

                            
                            {{-- <div class="item">
                                <a href="{{route('index')}}">
                                    <img class="img-fluid" src="frontend\img\slider\slider3.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{route('index')}}"><img class="img-fluid" src="frontend\img\slider\slider4.jpg" alt=""></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
