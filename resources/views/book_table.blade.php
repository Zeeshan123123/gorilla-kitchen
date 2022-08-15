@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Book Your Table</h1>
      </div>
    </div>
  </div>
</section>
 <!-- end titlebar section -->
<!-- book section -->
<section class="book-table-section py-5">
  <div class="container py-4">
    <div class="row">
      <div class="col-md-7 order-1 mb-3 mb-md-0 order-md-0">
        <h2 class="fw-bold mb-3">
          Book A Table
        </h2>
        <div class="form_container">
          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
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
              <div class="col-md-6 form-group">
                <input type="number" class="form-control" name="guests" id="people" placeholder="# of guests" min="1" max="20" data-msg="Please enter a Number">
                <div class="validate"></div>
              </div>
            </div>
            <div class="col-md-12 form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div>
              <button type="submit" class="btn btn-3d bg-green-gradient">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5 contact-info order-0 order-md-1">
        <h2 class="fw-bold">Reserve by phone</h2>
        <div class="info-wrap mb-3">
          <div class="icon-box mb-1 d-flex align-items-center">
            <i class="fa fa-phone text-green me-3"></i>
            <p class="mb-0"> 022 060 6763</p>
          </div>
        </div>
        <div class="info-wrap mb-3">
          <h2 class="fw-bold">Address</h2>
          <div class="icon-box mb-1 d-flex align-items-center">
            <i class="fa fa-map-marker text-green me-3"></i>
            <p class="mb-0"> 159 – Symonds Street, Eden Terrace, Auckland</p>
          </div>
        </div>
        <div class="info-wrap mb-3">
          <h2 class="fw-bold">Send Us an email</h2>
          <div class="icon-box mb-1 d-flex align-items-center">
            <i class="fa fa-envelope text-green me-3"></i>
            <p class="mb-0">info@gorillakitchen.nz</p>
          </div>            
        </div>
        <div class="info-wrap">
          <h2 class="fw-bold">Opening-hours:</h2>
          <div class="icon-box mb-0 d-flex align-items-center">
            <i class="fa fa-clock-o text-green me-3"></i>
            <p class="mb-0"> 
            Monday : Closed
            </p>
          </div>
          <div class="icon-box mb-1 d-flex align-items-center">
            <i class="fa fa-clock-o text-green me-3"></i>
            <p class="mb-0"> 
            Tuesday – Sunday : 11AM – 10PM
            </p>
          </div>
          <p><strong>Note: Last order 8:45PM all days</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end book section -->
@endsection