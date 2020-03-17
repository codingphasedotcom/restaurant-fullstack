@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} America's #1 Burgers
@endsection




@section('content')
    <section id="information">
    <div class="restaurant-image">
      <img src="img/top-down.jpg">
    </div>
    <div class="info">
      <h2>We Started From The Bottom In 1987</h2>
      <div class="paragraphs">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
          officia
          fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
          et
          similique!</p>
      </div>
      <a href="#" class="about-link">
        <span>Learn more about restaurants</span>
        <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </a>
    </div>
  </section>
  @include('includes.food-categories-slider')
@endsection