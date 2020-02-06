

@extends('artuz.layouts.makets.front.sayt')

@section('navigation')
     
     @include('artuz.layouts.front.pages.navigation')

@endsection


@section('sliders')
    
     @include('artuz.layouts.front.pages.sliders')

@endsection



@section('info-intro')
    
     @include('artuz.layouts.front.pages.info-intro')

@endsection

{{-- @section('slider')

     @include('artuz.layouts.front.');

@endsection --}}


@section('content')
    
     @include('artuz.layouts.front.pages.content')

@endsection


{{-- @section('bar')
	{!! $rightBar !!}
@endsection

@section('footer')
	{!! $footer !!}
@endsection --}}

