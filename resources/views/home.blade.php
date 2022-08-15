@extends('layouts.master_frontend')

@section('page_content')
<section class="slider_section p-0" style="min-height:100vh">
  <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 px-3 py-2 shadow bg-white bg-opacity-50">
              <div class="detail-box">
                <h1 class="text-black text-uppercase">
                  Nothing compares to the flavor of nutritious dishes
                </h1>
                <lead class="text-black">
                  Healthy dishes are the perfect solution for those looking for delicious yet nutritious meals. Our recipes are simple and easy to follow, with ingredients that are both fresh and healthy.
                </lead>
                <div class="btn-box btn-box pt-4">
                  <a href="{{ route('order.now') }}" class="btn btn-3d bg-green-gradient">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>              
      <div class="carousel-item" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 px-3 py-2 bg-white bg-opacity-50 shadow">
                <div class="detail-box">
                  <h1 class="text-black text-uppercase">
                    The BRUSCHETTA is a perfect balance of flavor and health
                  </h1>
                  <lead class="text-black">
                    The BRUSCHETTA is a delicious and nutritious dish that substitutes unhealthy options. It is composed of whole-wheat bread, mozzarella cheese, tomatoes, and basil.
                  </lead>
                  <div class="btn-box btn-box pt-4">
                    <a href="{{ route('order.now') }}" class="btn btn-3d bg-green-gradient">
                    Order Now
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 px-3 py-2 bg-white shadow bg-opacity-50">
                <div class="detail-box">
                  <h1 class="text-black text-uppercase">
                    A diet that is both quick and healthy
                  </h1>
                  <lead class="text-black">
                    When you're on the go and want something delicious, Gorilla Kitchen's burgers are the perfect solution! They're packed with nutrients so you can stay healthy while on the go.
                  </lead>
                  <div class="btn-box btn-box pt-4">
                    <a href="{{ route('order.now') }}" class="btn btn-3d  bg-green-gradient">
                      Order Now
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <ol class="carousel-indicators justify-content-center">
        <li data-bs-target="#customCarousel1" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#customCarousel1" data-bs-slide-to="1"></li>
        <li data-bs-target="#customCarousel1" data-bs-slide-to="2"></li>
      </ol>
    </div>
  </div>
</section>
<!-- end slider section -->
<section class="food_section pb-5 pt-0 pt-md-5">
<div class="container pb-3">
<div class="heading_container heading_center">
  <h2>
    Our Menu
  </h2>
</div>
<ul class="filters_menu">
  <li class="active" data-filter="*">All</li>
  <li data-filter=".drinks">Drinks</li>
  <li data-filter=".lunch">Lunch</li>
  <li data-filter=".dinner">Dinner</li>
</ul>
<div class="filters-content">
  <div class="row grid d-flex">
    <div class="col-sm-6 col-lg-4 all lunch">
      <div class="box h-100">
        <div>
          <a href="single-product.php">
          <div class="img-box img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/smoothie-bowl.webp" alt="Smoothie Bowl" class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Smoothie Bowl
            </h5>
            <div class="options">
              <h6 class="text-start">
                ACAI Smoothie Bowl<br/>
                Tropical
              </h6>
              <h6 class="text-end">
                $18
              </h6>
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 all drinks">
      <div class="box h-100">
        <div>
           <a href="single-product.php">
          <div class="img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/coffee.webp" alt="Coffee" class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Coffee
            </h5>
            <div class="options">
              <h6 class="text-star">
                Small
                <br/>
                Large
              </h6>
              <br/>
              <h6 class="text-end">
                5.50
                <br/>
                6.50
              </h6>
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 all lunch">
      <div class="box h-100">
        <div>
          <a href="single-product.php">
          <div class="img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/Gorilla-Fila.webp" alt="Gorilla Fila" class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Gorilla Fila
            </h5>
            <div class="options">
              <h6 class="text-start">
                Scrambled Tofu<br/>
                Vegan Egg Omelette
              </h6>
              <h6 class="text-end">
                $24
              </h6>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 all dinner">
      <div class="box">
        <div>
          <a href="single-product.php">
          <div class="img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/products-with-no-images.webp" alt=""  class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Frida Burger
            </h5>
            <div class="options">
              <h6 class="">
                Chips<br/>Salad
              </h6>
              <h6 class="">
                $24
              </h6>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 all drinks">
      <div class="box">
        <div>
          <a href="single-product.php">
          <div class="img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/iced-coffee.png" alt=""  class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Iced Coffee
            </h5>
            <div class="options">
              <h6 class="">
               Iced coffee<br/>Iced chocolate
              </h6>
              <h6 class="">
                $13
              </h6>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 all dinner">
      <div class="box">
        <div>
          <a href="single-product.php">
          <div class="img-box">
            <img src="{{ASSETS_FRONTEND}}img/products/jack-and-dil-burger.webp" alt=""  class="w-100 h-100">
          </div>
          <div class="detail-box">
            <h5 class="">
              Jack N Dill Burger
            </h5>
            <div class="options">
              <h6 class="">
                Chips
                <br/>
                Salad
              </h6>
              <h6 class="">
                $24
              </h6>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="btn-box mt-5 text-center">
  <a href="menu.php" class="btn btn-3d bg-green-gradient">
    View More
  </a>
</div>
</div>
</section>

<!-- end food section -->
<!-- about section -->

<section class="about_section py-5 d-none d-md-block" style="background:url('{{ASSETS_FRONTEND}}img/about-bg.jpg')">
<div class="container px-3">
<div class="row justify-content-end py-2" >
  <!--<div class="col-md-6" style="background:url({{ASSETS_FRONTEND}}img/)">
    <div class="img-box">
      <img src="{{ASSETS_FRONTEND}}img/about-img.png" alt="">
    </div>
  </div>-->
  <div class="col-md-7 p-3 p-md-4 bg-white bg-opacity-50">
    <div class="detail-box">
        <h2 class="text-black mb-2">
          Food is our common ground a universal experience
        </h2>
      <p class="text-black">
        At Gorilla Kitchen we believe that what we eat and drink should be delicious and healthy without having negative impacts on the planet and animals! All of our food is free from Dairy, Eggs, Honey, Animal Products, Nasty Chemicals and is GMO free!

We want you to eat like a King, not compromising on flavor, health or ethics. The Gorilla eats a natural Plant Based diet and is one of the strongest Animals on the Planet.
      </p>
      <a href="" class="btn btn-3d bg-green-gradient">
        Read More
      </a>
    </div>
  </div>
</div>
</div>
</section>

<!-- end about section -->
<section id="gallery" class="gallery mt-3 py-5  d-none d-md-block">
<div class="container">
  <div class="text-center">
    <h2 class="fw-bold">Gallery</h2>
    <p>Some photos from Our Restaurant</p>
  </div>
</div>

<div class="container-fluid">
  <div class="row d-flex flex-wrap align-items-center" data-bs-toggle="modal" data-bs-target="#lightbox">
    <div class="col-12 col-md-6 col-lg-3 p-0">            
      <img src="{{ASSETS_FRONTEND}}img/products/cash-pizza.png" data-bs-target="#indicators" alt="" /> 
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/milkshake.png" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/muffin.png" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/pepproni-pizza.png" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/coffee.webp" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/cup-cake.png" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/slice.png" data-bs-target="#indicators" alt="" />
    </div>
    <div class="col-12 col-md-6 col-lg-3 p-0">
      <img src="{{ASSETS_FRONTEND}}img/products/Kombucha.png" data-bs-target="#indicators" alt="" />
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <button type="button" class="close text-right p-2" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <div id="indicators" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/cash-pizza.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/milkshake.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/muffin.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/pepproni-pizza.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/coffee.webp" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/cup-cake.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/slice.png" alt="Restaurant and Food image">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ASSETS_FRONTEND}}img/products/Kombucha.png" alt="Restaurant and Food image">
      </div>
    </div>
    <a class="carousel-control-prev" href="#indicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#indicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

      </div>
    </div>
  </div>
</div>
</section>
<!-- End Gallery Section -->

<!-- book section -->
<section class="book-table-section py-5">
<div class="container py-3">
  <div class="row">
    <div class="col-md-6">
      <div class="heading_container">
        <h2 class="mb-3 fw-bold">
          Book A Table
        </h2>
      </div>
      <div class="form_container">
        <form action="">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="guests" id="people" placeholder="# of guests" min="1" max="20" data-msg="Please enter a Number">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <select type="" class="form-control" name="time" id="time" placeholder="Time">
              <option value="11:00">11:00 AM</option>
              <option value="11:30">11:30 AM</option>
              <option value="12:00">12:00 PM</option>
              <option value="12:30">12:30 PM</option>
              <option value="01:00">01:00 PM</option>
              <option value="01:30">01:30 PM</option>
              <option value="02:00">02:00 PM</option>
              <option value="02:30">02:30 PM</option>
              <option value="03:00">03:00 PM</option>
              <option value="03:30">03:30 PM</option>
              <option value="04:00">04:00 PM</option>
              <option value="04:30">04:30 PM</option>
              <option value="05:00">05:00 PM</option>
              <option value="05:30">05:30 PM</option>
              <option value="06:00">06:00 PM</option>
              <option value="06:30">06:30 PM</option>
              <option value="07:00">07:00 PM</option>
              <option value="07:30">07:30 PM</option>
              <option value="08:00">08:00 PM</option>
              <option value="08:30">08:30 PM</option>
              <option value="08:45">08:45 PM</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          <div class="validate"></div>
          </div>
          <div class="form-group">
            <button class="btn btn-3d bg-green-gradient">
              Book Now
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="heading_container">
        <h2 class="mb-3 fw-bold">
          Locate Us
        </h2>
      </div>
      <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.1692441626133!2d174.75897821488843!3d-36.862367587973374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47c2ef697305%3A0x6be647f928f6e1e5!2s159%20Symonds%20Street%2C%20Eden%20Terrace%2C%20Auckland%201010%2C%20New%20Zealand!5e0!3m2!1sen!2s!4v1649713448972!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end book section -->
@endsection