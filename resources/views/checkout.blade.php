@extends('layouts.master_frontend')
@section('page_title') {{ $page_title }} @endsection
@section('page_css')
<style>
.show-delivery {
  height: 237px;
}
</style>
@endsection
@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}/img/page-titlebar-bg.jpg')">
   <div class="container ">
      <div class="row">
         <div class="col-md-7 col-lg-6 ">
            <h1 class="text-black fw-bold">Checkout</h1>
         </div>
      </div>
   </div>
</section>
<!-- end titlebar section -->
<!-- book section -->
<section class="food_section checkout-section py-5 bg-white">
   <div class="container py-3">
      <!-- Start: Alert Messages -->
         @include('layouts.alerts')
      <!-- End: Alert Messages -->

      <strong class="text-danger">Funtionality of this page is in progress.</strong>
      <form class="checkout-form" action="{{ route('order.store') }}" method="post">
        @csrf 
        <input id="order-method" type="hidden" name="order_method" value="{{ getSelectedOrderMethod()?getSelectedOrderMethod():'Take Away' }}">
        <input id="order-method" type="hidden" name="payment_method" value="stripe">

         <div class="row">
            <div class="col-lg-8">
               <ul class="filters_menu" id="filters">
                  <li onclick="orderMethod('Take Away')" data-filter=".takeaway" class=" {{(!getSelectedOrderMethod())?'active':getSelectedOrderMethod() == 'Take Away'?'active':''}}">Take Away</li>
                  
                  <li onclick="orderMethod('Dine-in')" data-filter=".dinein" class="{{ getSelectedOrderMethod() == 'Dine-in'?'active':'' }}">Dine-in</li>
                  
                  <li onclick="orderMethod('Delivery')" data-filter=".delivery" class="{{ getSelectedOrderMethod() == 'Delivery'?'active':'' }}">Delivery</li>
               </ul>

                <div class="col-lg-12">
                  <h2 class="fw-bold my-4">Billing details</h2>
                  <div class="row">
                     <div class="col-lg-6">
                        <input type="text" required="" name="billing_first_name" id="first-name" placeholder="First Name" class="form-control">
                        <div class="validate"></div>
                     </div>
                     <div class="col-lg-6">
                        <input type="text" required="" name="billing_last_name" id="last-name" placeholder="Last Name" class="form-control">
                        <div class="validate"></div>
                     </div>
                     <div class="col-lg-6">
                        <input type="tel" required="" name="billing_phone_number" id="phone-number" placeholder="Phone #" class="form-control">
                        <div class="validate"></div>
                     </div>
                     <div class="col-lg-6">
                        <input type="email" required="" name="billing_email" id="email" placeholder="Email" class="form-control">
                        <div class="validate"></div>
                     </div>
                   </div>
                </div>

               <div class="filters-content">
                  <div class="row item-list" id="items">
                     <div class="col-lg-12 item takeaway takeaway-content {{ getSelectedOrderMethod() == 'Take Away'?'active':'' }}">
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ (getSelectedOrderDate())?getSelectedOrderDate():'' }}" >
                              <div class="validate"></div>
                           </div>
                           <div class="col-md-6">
                              <select type="" class="form-control" name="takeaway_time" id="time" placeholder="Time">
                                <option value="">Select Time</option>
                                
                                @foreach(getOrderTimes() as $orderTime)
                                <option value="{{ $orderTime }}" {{ (getSelectedOrderTime() == $orderTime)?'selected':'' }}>{{ $orderTime }}</option>
                                @endforeach
                              </select>
                              <div class="validate"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12 item dinein dinein-content {{ getSelectedOrderMethod() == 'Dine-in'?'active':'' }}">
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <input type="number" class="form-control" name="guests" id="people" placeholder="# of guests" min="1" max="20" data-msg="Please enter a Number">
                              <div class="validate"></div>
                           </div>
                           <div class="col-md-6 form-group">
                              <select type="" class="form-control" name="dinein_time" id="time" placeholder="Time">
                                @foreach(getOrderTimes() as $orderTime)
                                <option value="{{ $orderTime }}" {{ (getSelectedOrderTime() == $orderTime)?'selected':'' }}>{{ $orderTime }}</option>
                                @endforeach
                              </select>
                              <div class="validate"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12 item delivery delivery-content {{ getSelectedOrderMethod() == 'Delivery'?'active':'' }}">
                        <div class="row">
                           <div class="col-lg-6">
                              <input type="text" name="country_name" id="country" placeholder="Country" class="form-control">
                           </div>
                           <div class="col-lg-6">
                              <input type="text" name="city" id="city" placeholder="City" class="form-control">
                           </div>
                           <div class="col-lg-6">
                              <input type="text" name="state" id="state" placeholder="State/Province" class="form-control">
                           </div>
                           <div class="col-lg-6">
                              <input type="number" name="post_code" id="post-code" placeholder="Post Code" class="form-control">
                           </div>
                           <div class="col-lg-6">
                              <input type="address" name="address" id="address" placeholder="Address" class="form-control">
                           </div>
                           <div class="col-lg-6">
                              <input type="text" name="street" id="street" placeholder="Street #" class="form-control">
                           </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                          <h2 class="fw-bold my-4">Delivery details</h2>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input billing-radio" type="radio" name="inlineRadioOptions" id="same-details" value="same" checked>
                            <label class="form-check-label" for="same-details">Same as Billing details</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="different-details" value="different">
                            <label class="form-check-label" for="different-details">Different details</label>
                          </div>

                          <div class="row deliver-details mt-3 d-none">
                              <div class="col-lg-6">
                                <input type="text" name="delivery_first_name" id="first-name" placeholder="First Name" class="form-control">
                                <div class="validate"></div>
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="delivery_last_name" id="last-name" placeholder="Last Name" class="form-control">
                                <div class="validate"></div>
                             </div>
                             <div class="col-lg-6">
                                <input type="tel" name="delivery_phone_number" id="phone-number" placeholder="Phone #" class="form-control">
                                <div class="validate"></div>
                             </div>
                             <div class="col-lg-6">
                                <input type="email" name="delivery_email" id="email" placeholder="Email" class="form-control">
                                <div class="validate"></div>
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="country_name" id="country" placeholder="Country" class="form-control">
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="city" id="city" placeholder="City" class="form-control">
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="state" id="state" placeholder="State/Province" class="form-control">
                             </div>
                             <div class="col-lg-6">
                                <input type="number" name="post_code" id="post-code" placeholder="Post Code" class="form-control">
                             </div>
                             <div class="col-lg-6">
                                <input type="address" name="address" id="address" placeholder="Address" class="form-control">
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="street" id="street" placeholder="Street #" class="form-control">
                             </div>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="cart-table">
                  <div class="cart-table-header d-none d-lg-block border p-3 border-light">
                     <div class="row">
                        <div class="col-md-8">
                           <h5 class="fw-bold">Product</h5>
                        </div>
                        <div class="col-md-4">
                           <h5 class="fw-bold">Total</h5>
                        </div>
                     </div>
                  </div>
                  @if( count($cartItems) > 0 )  
                  @foreach($cartItems as $item)
                  <div class="cart-item border p-3 border-light text-center text-md-start position-relative">
                     <div class="row align-items-center">
                        <div class="col-md-8 mb-3 mb-lg-0">
                           <a class="product" href="#">
                              <div class="cover-frame">
                                 <img src="{{ $item->attributes->image }}" alt="{{ $item->name }}" class="rounded-circle me-3">
                              </div>
                              <div class="product-description">
                                 <h5 class="fw-bold text-green">{{ $item->name }}</h5>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                           <div class="price-total"><span>Total: </span>${{ $item->quantity*$item->price }}</div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
               <div class="cart-total">
                  <div class="sum  px-2 border border-light">
                     <div class="row py-2">
                        <div class="col-md-8 pt-2">
                           <div class="total-title">Subtotal:</div>
                        </div>
                        <div class="col-md-4 text-end pt-2">
                           <div class="price-1">${{ \Cart::getSubTotal()-getShippingPrice() }}</div>
                        </div>
                        <div class="col-md-8 pt-2">
                           <div class="total-title">Total:</div>
                        </div>
                        <div class="col-md-4 text-end pt-2">
                           <div class="price-grand-total">${{ getGrandTotal() }}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row additional-info">
               <div class="col-md-8">
                  <h2 class="fw-bold mb-3">Additional information</h2>
                  <div class="fw-bold mb-3">
                     <textarea name="order_notes" rows="6" id="order-notes" required="" placeholder="Order Notes" class="form-control">{{ session()->has('order_notes')?session()->get('order_notes'):'' }}</textarea>
                  </div>
               </div>
               <div class="col-lg-8">
                  <input type="number" name="tip" id="tip" placeholder="Want to give a tip $?" class="form-control" min="1" max="100">
                  <div class="validate"></div>
                  <div class="p-0 pb-4">
                     <a class="btn btn-3d bg-green-gradient mt-md-0 mt-4" onclick="clearTip()">
                     Remove Tip
                     </a>
                  </div>
               </div>
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
               <!-- button -->
               <button type="submit" class="btn btn-3d bg-green-gradient" style="width: 20%;">
               Place order
               </button>
               <!-- button end -->
            </div>
         </div>
      </form>
   </div>
   </div>
</section>
<!-- end book section -->
@endsection

@section('page_scripts')
<script>
  function orderMethod(orderMethod) {
    $('#order-method').val(orderMethod);

    if (orderMethod == 'Take Away') {
      hideDineInTabContent();
      hideDeliveryTabContent();

      showTakeAwayTabContent();
    } else if(orderMethod == 'Dine-in') {
      hideDeliveryTabContent();
      showDineInTabContent();
    } else if(orderMethod == 'Delivery') {
      hideTakeAwayTabContent();
      hideDineInTabContent();

      showDeliveryTabContent();
    }
  }

  function hideTakeAwayTabContent() {
    $('.takeaway-content').css('display', 'none');
    $('.additional-info').css('margin-top', '0');
  }

  function hideDineInTabContent() {
    $('.dinein-content').css('display', 'none');
    $('.additional-info').css('margin-top', '0');
  }

  function hideDeliveryTabContent() {
    $('.delivery-content').css('display', 'none');
    $('.additional-info').css('margin-top', '0');
  }

  function showTakeAwayTabContent() {
    $('.takeaway-content').show();
    $('.takeaway-content').css('position','absolute');
    $('.takeaway-content').css('left','0px');
    $('.takeaway-content').css('top','0px');
  }

  function showDineInTabContent() {
    $('.dinein-content').show();
    $('.dinein-content').css('position','absolute');
    $('.dinein-content').css('left','0px');
    $('.dinein-content').css('top','0px');
  }

  function showDeliveryTabContent() {
    $('.delivery-content').show();
    $('.delivery-content').css('position','absolute');
    $('.delivery-content').css('left','0px');
    $('.delivery-content').css('top','0px');
  }

  function clearTip() {
    $('#tip').val('');
  }
</script>

<script>
$(document).ready( function () {
  if ( $('.delivery-content').hasClass('active') ) {
    $('.delivery-content').show();
    $('.delivery-content').css('position','absolute');
    $('.delivery-content').css('left','0px');
    $('.delivery-content').css('top','0px');

    $('#items').css('position', 'relative');
    $('#items').css('height', '189px');
  } else if ( $('.dinein-content').hasClass('active') ) {
    $('.dinein-content').show();
    $('.dinein-content').css('position','absolute');
    $('.dinein-content').css('left','0px');
    $('.dinein-content').css('top','0px');

    $('#items').css('position', 'relative');
    $('#items').css('height', '126px');
  }
});
</script>
@endsection