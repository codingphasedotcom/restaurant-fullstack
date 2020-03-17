@extends('layouts.app')

@section('title')
Food Menu 
@endsection

@section('content')
    <div id="menu-page">
      
      @include('includes.food-categories-slider')
      
    </div>
@endsection