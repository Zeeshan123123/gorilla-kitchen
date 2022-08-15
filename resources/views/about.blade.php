@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">About Gorilla Kitchen</h1>
      </div>
    </div>
  </div>
</section>
 <!-- end titlebar section -->
<section class="about-section py-5">
  <div class="container py-3">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
          <img src="{{ASSETS_FRONTEND}}img/gallery/gallery-2.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              Our Story
            </h2>
          </div>
          <p>
            At Gorilla Kitchen we believe that what we eat and drink should be delicious and healthy without having negative impacts on the planet and animals! All of our food is free from Dairy, Eggs, Honey, Animal Products, Nasty Chemicals and is GMO free!
          </p>
          <p>
            We want you to eat like a King, not compromising on flavor, health or ethics. The Gorilla eats a natural Plant Based diet and is one of the strongest Animals on the Planet.
          </p>
          <p>
            Our main passion is in creating wholefood organic raw and cooked food that nourishes the body, mind and soul. We love combining traditional techniques like fermentation and sprouting with new modern cooking techniques to create exciting and delicious dishes.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 py-md-0 px-3" style="background:url({{ASSETS_FRONTEND}}img/CTA-bg.jpg) center center;">
  <div class="container p-md-0">
    <div class="row justify-content-left">
      <div class="col-md-7 col-lg-6 bg-white bg-opacity-50 px-3 py-4 p-md-5">
            <h5 class="fw-bold text-green text-uppercase">Buy food gift cards from gorilla kitchen</h5>
            <h2 class="text-black fw-bold">A gift card may be a better gift idea for your loved ones</h2>
            <p class="text-black">
              The food gift card is a great way to show appreciation for your loved ones and to share their favorite foods with them.
            </p>
            <a class="btn btn-3d bg-green-gradient">Buy Gift Card</a>
      </div>
    </div>
  </div>
</section>
<!-- end about section -->
@endsection