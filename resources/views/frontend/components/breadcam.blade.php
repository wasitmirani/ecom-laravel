<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('index')}}"><strong><span class="mdi mdi-home"></span> Home</strong></a>
                @if(!empty($active_name))
                <span class="mdi mdi-chevron-right"></span> <a href="#">{{$active_name}}</a>
                @endif
            </div>
        </div>
    </div>
</section>
