<?php

function current_page($uri='home'){
 return request ()-> path()==$uri;

}
?>


<div class="container-fluid">
<div class="container">
<nav class="navbar navbar-default capitalize header-nav navbar-fixed-top">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="{{url('home')}}">Bhattidanda Homestay</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0 55px;">
      <ul class="nav navbar-nav">
        <li class="{{current_page('home')?'active':''}}"><a href="{{url('home')}}">home <span class="sr-only">(current)</span></a></li>
        <li class="{{current_page('know-about-phool-maya')?'active':''}}"><a href="{{url('know-about-phool-maya')}}">know about phool maya</a></li>
        <li class="{{current_page('ourservice')?'active':''}}"><a href="{{url('ourservice')}}">Our service</a></li>
        <li class="{{current_page('package')?'active':''}}"><a href="{{url('package')}}">package</a></li>
        <li class="{{current_page('gallery')?'active':''}}"><a href="{{url('gallery')}}">gallery</a></li>
        <li class="{{current_page('booking')?'active':''}}"><a href="{{route('package')}}">booking</a></li>
        <!-- <li class="{{current_page('room')?'active':''}}"><a href="{{url('room')}}">room</a></li> -->
        <li class="{{current_page('guestreviews')?'active':''}}"><a href="{{url('guestreviews')}}">Guest Reviews</a></li>
        <li class="{{current_page('contact')?'active':''}}"><a href="{{url('contact')}}">contact</a></li>
      
      </ul>
     
    </div><!-- /.navbar-collapse -->
  
</nav>
</div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
  <a href="https://www.tripadvisor.com/Hotel_Review-g317113-d4091676-Reviews-Bhattidanda_Fresh_Natural_Homestay-Dhulikhel_Bagmati_Zone_Central_Region.html" target="_blank"><img class="img-responsive trip-logo" src="{{url('public/images/trip.png')}}" width="100"></a> 
</div>