@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'Cart View'])

@endcomponent


@livewire('cart-view')

@endsection
