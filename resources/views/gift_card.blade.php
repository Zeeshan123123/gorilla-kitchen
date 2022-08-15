@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Gift Card</h1>
      </div>
    </div>
  </div>
</section>
 <!-- end titlebar section -->
<!-- book section -->
<section class="gift-card-section py-5">
  <div class="container py-3">
    <div class="row">
          <div class="col-md-10 offset-md-1">
            <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar" class="mb-0 ps-0 text-center d-flex justify-content-center">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- fieldsets -->
                      <fieldset class="text-start">
                        <h2 class="fw-bold mb-3 text-center">Gift Card Amount</h2>
                        <input type="number" name="amount" placeholder="$ Enter Amount" class="form-control" min="50" max="200">
                        <input type="button" name="next" class="next action-button-next bg-gradient-green btn-3d" value="Next">
                      </fieldset>
                      <fieldset class="text-start">
                          <h2 class="fw-bold mb-3">Recipient Details</h2>
                          <h6 class="fw-bold mb-2">Who is  this gift for?</h6>
                          <ul class="d-flex ps-0" style="list-style-type:none">
                            <li class="me-3">
                              <input type="radio" id="option-3" name="selector" checked="">
                              <label for="option-3">My Friend</label>
                            </li>
                            <li>
                              <input type="radio" id="option-4" name="selector">
                              <label for="option-4">Myself</label>
                            </li>
                          </ul>
                          <input type="text" required="" name="r-name" id="r-name" placeholder="Recipient Name" class="form-control">
                          <input type="text" required="" name="s-name" id="s-name" placeholder="Sender Name" class="form-control">
                          <textarea name="personalised-message" rows="6" id="personalised-message" required="" placeholder="Personalised Message" class="form-control"></textarea>
                          <h6 class="fw-bold mb-2">Add an image to your personalized message</h6>
                          <input class="form-control" type="file" id="personalised-image" name="personalised-image">
                          <h6 class="fw-bold mb-2">When would you like to send it?</h6>
                          <ul class="d-flex ps-0" style="list-style-type:none">
                            <li class="me-3">
                              <input type="radio" id="option-1" name="selector" checked="">
                              <label for="option-1">Now</label>
                            </li>
                            <li>
                              <input type="radio" id="option-2" name="selector" checked="">
                              <label for="option-2">Choose a date</label>
                            </li>
                          </ul>
                          <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
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
                          <h6 class="fw-bold mb-2">How would you like to send the gift card?</h6>
                          <p>You can select more than one option</p>
                          <ul class="d-flex ps-0" style="list-style-type:none">
                            <li class="me-3">
                              <input type="checkbox" id="send-text" name="send-text" value="">
                              <label for="send-text"><i class="fa fa-sms display-5"></i></label>
                            </li>
                            <li class="me-3 justify-cotent-between">
                              <input type="checkbox" id="send-email" name="send-email" value="">
                              <label for="send-email"><i class="fa fa-envelope display-5"></i></label>
                            </li>
                            <li>
                              <input type="checkbox" id="print" name="print" value="">
                              <label for="print"><i class="fa fa-print display-5"></i></label>
                            </li>
                          </ul>
                          <input type="button" name="previous" class="previous action-button-previous btn btn-3d me-2" value="Previous"/>
                          <input type="button" name="next" class="next action-button-next bg-gradient-green btn-3d btn" value="Next">
                      </fieldset>
                      <fieldset>
                        <div class="payment-methods">
                          <h2 class="fw-bold mb-3">Payment method</h2>
                          <h4 class="fw-bold">Credit Card</h4>
                            <div class="row mt-3 mb-3">
                              <div class="col-md-12">
                                  <input type="text" id="name-on-card" name="name-on-card" class="form-control" placeholder="Name on Card">
                              </div>
                              <div class="col-md-12">
                                  <input type="text" class="form-control" placeholder="Card Number" max="16" id="card-number" name="card-number">
                              </div>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="MM/YY" id="expiry" name="expiry">                           
                              </div>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="CVV" name="cvv" id="cvv">
                              </div>
                              <div class="col-md-12">
                                  <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                              </div>  
                            </div>                         
                        </div>
                        <h2 class="fw-bold my-3">Card holder Info</h2>
                        <div class="row">
                          <div class="col-lg-6">
                            <input type="text" required="" name="country-name" id="country" placeholder="Country" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="text" required="" name="city" id="city" placeholder="City" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="text" required="" name="state" id="state" placeholder="State/Province" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="number" required="" name="post-code" id="post-code" placeholder="Post Code" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="address" required="" name="address" id="address" placeholder="Address" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="text" required="" name="street" id="street" placeholder="Street #" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="tel" required="" name="phone-number" id="phone-number" placeholder="Phone #" class="form-control">
                          </div>
                          <div class="col-lg-6">
                            <input type="email" required="" name="email" id="email" placeholder="Email" class="form-control">
                          </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous btn btn-3d me-2" value="Previous"/>
                        <input type="button" name="next" class="next action-button-next bg-gradient-green btn-3d btn" value="Next">
                      </fieldset>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-7 mx-auto">
                                  <div class="card w-100 mb-3">
                                      <div class="cardheader">
                                        <img alt="" src="{{ASSETS_FRONTEND}}img/gift-card.jpg">
                                      </div>
                                      <div class="cardbody p-3">
                                        <h4 class="fw-bold text-center">Gift Card Value $50 for Gorilla Kitchen</h4>
                                        <div class="sender-info d-flex">
                                          <div class="title fw-bold me-2">
                                            From:
                                          </div>
                                          <div class="desc">Alice</div>
                                        </div>
                                        <div class="recipient-info d-flex">
                                          <div class="title fw-bold me-2">
                                            To:
                                          </div>
                                          <div class="desc">Freya</div>
                                        </div>
                                        <div class="bottom d-flex">
                                          <div class="me-3 fw-bold">Coupon code:</div>
                                          <lead>0123456789</lead>      
                                        </div>
                                        <lead class="mt-2 text-end">Valid till: 13-07-2023</lead>
                                      </div>

                                  </div>
                                </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous btn btn-3d me-2" value="Previous"/>
                        <input type="submit" name="submit" class="submit action-button btn btn-3d bg-green-gradient" value="Submit"/>
                      </fieldset>                     
                </form>
          </div>
        </div> 
  </div>
</section>
@endsection