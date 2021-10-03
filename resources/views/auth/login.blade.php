@extends('layouts.frontend.master')

@section('content')


@component('frontend.components.bgBreadcam',['active_name'=>'Login'])
    
@endcomponent
<!-- customer login start -->

    <div class="row">
    
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
           <!--login area start-->
            
         @livewire('login')
            <!--login area start-->


        </div>
    </div>


@endsection
