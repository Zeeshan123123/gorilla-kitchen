@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}assets/img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Contact Us</h1>
      </div>
    </div>
  </div>
</section>
 <!-- end titlebar section -->
<!-- book section -->
<section class="contact-section py-5">
  <div class="container py-3">
    <div class="info-wrap">
        <div class="row">
          <div class="col-lg-3 col-md-6 info d-flex">
            <div class="icon me-2">
              <i class="fa fa-map d-flex align-items-center justify-content-center rounded-circle"></i>
            </div>
            <div class="content">
              <h4 class="text-green">Location:</h4>
              <p> Location: 159 – Symonds Street, Eden Terrace, Auckland</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 d-flex">
            <div class="icon me-2">
              <i class="fa fa-clock d-flex align-items-center justify-content-center rounded-circle"></i>
            </div>
            <div class="content">
              <h4 class="text-green">Open Hours:</h4>
              <p class="mb-1">Monday: Closed</p>
              <p class="mb-1">Tuesday-Sunday:11:00 AM - 10:00 PM</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 d-flex">
            <div class="icon me-2">
              <i class="fa fa-envelope d-flex align-items-center justify-content-center rounded-circle"></i>
            </div>
            <div class="content">
              <h4 class="text-green">Email:</h4>
              <p>info@gorillakitchen.nz</p>
            </div>           
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 d-flex">
            <div class="icon me-2">
              <i class="fa fa-phone d-flex align-items-center justify-content-center rounded-circle"></i>
            </div>
            <div class="content">
              <h4 class="text-green">Call:</h4>
              <p>022 060 6763</p>
            </div>        
          </div>
        </div>
      </div>
  </div>
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6 order-1 mb-3 mb-md-0 order-md-0">
        <h2 class="fw-bold mb-3">
          Send Your Queries
        </h2>
        <div class="form_container">
          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
            <div class="row">
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
                <input type="text" name="address" class="form-control" id="date" placeholder="Your Address" data-rule="minlen:4" data-msg="Please enter your address">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div>
                <button type="submit" class="btn btn-3d bg-green-gradient">Send Message</button>
              </div>
          </div>
        </form>
      </div>
      </div>
      <div class="col-md-6 order-0 order-md-1">
        <div class="heading_container">
            <h2 class="mb-3 fw-bold">
              Locate Us
            </h2>
          </div>
          <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.1692441626133!2d174.75897821488843!3d-36.862367587973374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47c2ef697305%3A0x6be647f928f6e1e5!2s159%20Symonds%20Street%2C%20Eden%20Terrace%2C%20Auckland%201010%2C%20New%20Zealand!5e0!3m2!1sen!2s!4v1649713448972!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->
@endsection