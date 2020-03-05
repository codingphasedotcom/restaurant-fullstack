<div class="side-menu">
  <a href="/" class="logo">
    <img src="{{$settings["general"]->logo_image_url}}">
  </a>
  <div class="menu">
    <div class="menu-title">
      Menu
    </div>
    <ul class="links">
      <li>
        <a href="/menu">Food</a>
      </li>
      <li>
        <a href="/about">About Us</a>
      </li>
      
      <li>
        <a href="/reservations">Reservations</a>
      </li>
      <li>
        <a href="/offers">Offers</a>
      </li>
      <li>
        <a href="/contact">Contact</a>
      </li>
      
    </ul>
  </div>
  <div class="social-icons">
    <a href="{{$settings["social"]->facebook_url}}" target="new">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="{{$settings["social"]->twitter_url}}" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="{{$settings["social"]->instagram_url}}" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  </div>
  <div class="location">
    <div class="address">
      {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
      {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
    </div>
    <div class="phone-number">
      <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
    </div>
  </div>
</div>