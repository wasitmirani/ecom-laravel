@extends('layouts.frontend.master')
@section('content')

@component('frontend.components.bgBreadcam',['active_name'=>'Check Out'])

@endcomponent



@livewire('checkout')





@endsection
