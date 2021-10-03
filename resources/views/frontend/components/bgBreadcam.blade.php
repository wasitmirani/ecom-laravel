<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                @if(!empty($active_name))
                <h1 class="mt-0 mb-3 text-white">{{$active_name}}</h1>
                @endif
                <div class="breadcrumbs">
                    <p class="mb-0 text-white"><a class="text-white" href="{{route('index')}}">Home</a> / <span class="text-white">{{$active_name}}</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
