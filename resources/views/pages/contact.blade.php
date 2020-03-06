@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection



@section('content')
    <div id="contact-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <p>
              {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
              {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
            </p>
            <h3>Phone Number</h3>
            <p>
              <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
            </p>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.8140418344683!2d-80.21037164997058!3d25.809708312831688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b14a3b8bbaa7%3A0xea85c8a06c579c54!2sBurger%20King!5e0!3m2!1sen!2sus!4v1583531624923!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
@endsection