@extends('layouts.app')

@section('title')
Food Menu 
@endsection

@section('content')
    <div id="menu-page">
      
      <section id="food-preview">
    <h2>We have everything you need to kill your hunger</h2>
    
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
        @foreach ($categories as $category)
            <a href="/menu/{{$category->title}}" class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  {{$category->title}}
                </div>
                <p class="food-description">
                  {{$category->description}}
                </p>
                <div class="food-image">
                  <img src="{{$category->image_url}}">
                </div>
              </div>
          </a>
        @endforeach
          
          
        </div>
      </div>
    </div>

  </section>
      
    </div>
@endsection