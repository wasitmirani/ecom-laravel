@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'Thank You'])

@endcomponent
<section class="section-padding bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pl-4 col-lg-5 col-md-5 pr-4">
                <img class="rounded img-fluid" src="{{asset('frontend/img/thankyou.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection