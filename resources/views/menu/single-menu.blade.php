@extends('layouts.app')

@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="single-menu-page">
      <div class="row">
        <div class="col-sm-12
        offset-md-1 col-md-10
        offset-lg-2 col-lg-8">
          <div class="content-box">
            <div class="row">
              <div class="col-md-12">
                <h1>{{$foodItem}}</h1>
              </div>
              @foreach ($foodItems as $item)
                <div class="col-md-6">
                  <div class="item">
                    <div class="title">
                      <h4>{{$item->title}}</h4>
                      <span class="price">${{$item->price}}</span>
                    </div>
                    <div class="description">
                      <p>{{$item->description}}</p>
                    </div>
                  </div>
                </div>
              @endforeach
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection