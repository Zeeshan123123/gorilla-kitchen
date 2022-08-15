@extends('layouts.master_frontend')
@section('page_title') {{ $page_title }} @endsection

@section('page_css')
<style>
.cart-qty {
  margin: 0 12px 0 12px;
}
</style>
@endsection

@section('page_content')
  <section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}/img/page-titlebar-bg.jpg')">
    <div class="container ">
      <div class="row">
        <div class="col-md-7 col-lg-6 ">
          <h1 class="text-black fw-bold">Cart</h1>
        </div>
      </div>
    </div>
  </section>
   <!-- end titlebar section -->
  <!-- book section -->
  <section class="cart-section py-5">
        <div class="container py-3">
          <!-- Start: Alert Messages -->
             @include('layouts.alerts')
          <!-- End: Alert Messages -->

          @if( count($cartItems) > 0 )
          <strong class="text-danger">Below gift voucher code and checkout page is in progress.</strong>
          <div class="cart-table">
            <div class="cart-table-header d-none d-lg-block border p-3 border-light">
              <div class="row">
                <div class="col-lg-5"><h5 class="fw-bold">Product</h5></div>
                <div class="col-lg-2"><h5 class="fw-bold">Quantity</h5></div>
                <div class="col-lg-2"><h5 class="fw-bold">Price</h5></div>
                <div class="col-lg-2"><h5 class="fw-bold">Total</h5></div>
                <div class="col-lg-1"></div>
              </div>
            </div>

            @foreach($cartItems as $item)
            <div class="cart-item border p-3 border-light text-center text-md-start position-relative">
              <div class="row align-items-center">
                <div class="col-lg-5 mb-3 mb-lg-0">
                  <a class="product d-block d-md-flex align-items-center" href="product.html">
                    <div class="cover-frame">
                      <img src="{{ $item->attributes->image }}" alt="{{ $item->name }}" class="rounded-circle me-3">
                    </div>
                    <div class="product-description">
                      <h5 class="fw-bold text-green">{{ $item->name }}</h5>
                      <p class="sb-text sb-text-sm">{{ truncateText($item->attributes->description) }}</p>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-md-4 col-lg-2 text-center text-lg-start mb-3 mb-md-0">
                  <div class="quantity d-flex align-items-center justify-content-center">
                    <a id="sub-qty-{{$item->id}}" onclick="subQuantity('{{ $item->id }}'); changeTotal('{{ $item->id }}');" type="button" class="quantity-icon bg-green rounded-circle text-white text-center fw-bold">-</a>
                           
                    <input id="cart-qty-{{$item->id}}" onchange="maxAllowedCartQty('{{ $item->id }}'); changeTotal('{{ $item->id }}');" onkeypress="return isNumberKey(event)" class="cart-qty" name="quantity" type="number" value="{{ $item->quantity }}" min="{{$minAllowedCartQty}}" max="{{$maxAllowedCartQty}}" class="border-1 border-light border-radius-3 text-center mx-2 px-3">
                     
                    <a id="add-qty-{{$item->id}}" onclick="addQuantity('{{ $item->id }}'); changeTotal('{{ $item->id }}');" type="button" class="quantity-icon bg-green rounded-circle text-center text-white fw-bold">+</a>
                  </div>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                  <div class="price-1"><span>Price: </span> <span id="cart-price-{{$item->id}}">{{ $item->price }}</span></div>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                  <div class="price-total"><span>Total: </span> <span id="total-price-{{$item->id}}" class="total-price">{{ $item->quantity*$item->price }}</span></div>
                </div>
                <div class="col-1 text-center">
                  <a href="{{ route('cart.remove', ['id' => $item->id]) }}" class="position-absolute position-lg-relative remove"><span class="quantity-icon d-flex justify-content-center align-tems-center rounded-circle bg-light text-danger">x</span></a>
                </div>
              </div>
            </div>
            @endforeach



            <div class="cart-item border p-3 border-light text-center text-md-start position-relative">
              <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 mb-3 mb-lg-0 py-2">
                   <input type="text" name="gift-voucher-code" class="form-control" id="gift-voucher-code" placeholder="Gift Voucher Code" data-rule="minlen:4" data-msg="Please enter Gift Voucher Code">
                </div>
                
                <div class="col-md-5 col-lg-4 col-md-3 text-center text-md-end">
                  <button class="btn btn-3d bg-green-gradient me-0 me-md-2">
                    Apply Gift voucher
                  </button>
                </div>
              </div>
            </div>
            <div class="row p-3 mt-3">
              <div class="col-md-6 px-2">
                <div class=" px-2 border border-light">
                    <form action="{{ route('coupen.apply') }}" method="post">
                      @csrf

                      <div class="row p-3">
                        <div class="cart-total-header py-3 border-bottom border-light">
                          <h2 class="fw-bold">Have a Promotional Code?</h2>
                        </div>
                        <div class="col-md-7 pt-3">
                          <input type="text" name="coupon_code" class="form-control" id="coupon-code" placeholder="Coupon code" data-rule="minlen:4" data-msg="Please enter Coupon Code">
                        </div>
                        <div class="col-md-5 text-center pt-3 text-md-end">
                          <button type="submit" class="btn btn-3d bg-green-gradient">
                            Apply Coupon
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
              <div class="col-md-6 px-2">
                <div class="cart-total px-2">
                  <div class="sum  px-2 border border-light">
                    <div class="row py-2">
                      <div class="cart-total-header py-3 border-bottom border-light">
                        <h2 class="fw-bold">Cart Total</h2>
                      </div>
                      <div class="col-md-8 pt-2">
                        <div class="total-title">Subtotal:</div>
                      </div>
                      <div class="col-md-4 text-end pt-2">
                        <div class="price-1">{{ getCurrencySymbol() }} 
                          <span id="sub-total">{{ \Cart::getSubTotal() }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="shipping-amount px-2 border border-light">
                    <div class="row py-2">
                      <div class="col-md-8">
                        <div class="total-title">Estimated shipping:</div>
                      </div>
                      <div class="col-md-4 text-end">
                        <div class="price-2">- {{ getCurrencySymbol().getShippingPrice() }}</div>
                      </div>
                    </div>
                  </div>


                  <div class="total-sum px-2 border border-light">
                    <div class="row py-2">
                      <div class="col-md-8">
                        <div class="total-title">Total:</div>
                      </div>
                      <div class="col-md-4 text-end">
                        <div class="price-all-total">{{ getCurrencySymbol() }}
                          <span id="price-all-total">{{ \Cart::getSubTotal()-getShippingPrice() }}</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  @if(getCoupenDiscount())
                  <div class="shipping-amount px-2 border border-light">
                    <div class="row py-2">
                      <div class="col-md-8">
                        <div class="total-title">Coupen Discount:</div>
                      </div>
                      <div class="col-md-4 text-end">
                        <div class="price-2"><span>-</span> {{ getCurrencySymbol().getCoupenDiscount() }} </div>
                      </div>
                    </div>
                  </div>
                  @endif 

                  <hr>
                  <div class="total-sum px-2 border border-light">
                    <div class="row py-2">
                      <div class="col-md-8">
                        <div class="total-title">Grand Total:</div>
                      </div>
                      <div class="col-md-4 text-end">
                        {{ getCurrencySymbol() }}
                        <span id="price-grand-total">{{ getGrandTotal() }}</span>
                      </div>
                    </div>
                  </div>
                  <hr>
                  
                </div>
                <div class="text-md-end py-3 px-2">
                  <a href="{{ route('order.now') }}" class="btn btn-3d bg-green-gradient me-0 me-md-2">
                    Continue shopping
                  </a>
                  <a href="{{ route('checkout') }}" class="btn btn-3d bg-green-gradient mt-md-0 mt-4">
                    Checkout
                  </a>
                </div>
              </div>
            </div>
          </div>

          @else
          <div class="cart-table">
            <div class="cart-table-header d-lg-block border p-3 border-light">
              <div class="row">
                <div class="col-lg-4"><h5 class="fw-bold"></h5></div>
                <div class="col-lg-5"><h5 class="fw-bold">Cart is empty, <a href="{{ route('order.now') }}">Click here to purchse item.</a></h5></div>
                <div class="col-lg-2"><h5 class="fw-bold"></h5></div>
                <div class="col-lg-1"></div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </section>
  <!-- end book section -->
@endsection

@section('page_scripts')

<script>
   function addClassActive(id) {

      for(let i=0; i<11; i++) {
         $('#rating'+i).removeClass('active-star');
      }

      if (!$('#rating'+id).hasClass("active-star")) {
         $('#rating'+id).addClass('active-star');
      }
   }

   function addQuantity(id) {
      console.log("id ", id)
      var previousCartValue = $('#cart-qty-'+id).val();
      console.log("previousCartValue 1 ", previousCartValue)
      previousCartValue = parseInt(previousCartValue);

      console.log("previousCartValue ", previousCartValue)
      if ( previousCartValue < '{{$maxAllowedCartQty}}' ) {
         previousCartValue = previousCartValue + 1;
         $('#cart-qty-'+id).val(previousCartValue);
      }
   }

   function subQuantity(id) {
      var previousCartValue = $('#cart-qty-'+id).val();
      previousCartValue = parseInt(previousCartValue);

      if (previousCartValue > '{{$minAllowedCartQty}}') {
         previousCartValue = previousCartValue - 1;
         $('#cart-qty-'+id).val(previousCartValue);
      }
   }

   function maxAllowedCartQty(id) {
      var cartQty = $('#cart-qty-'+id).val();

      cartQty = parseInt(cartQty);

      if (cartQty > '{{$maxAllowedCartQty}}') {
         alert('Maximum Allowed Cart Quantity is '+ '{{$maxAllowedCartQty}}');
         $('#cart-qty-'+id).val('{{$maxAllowedCartQty}}');
      }

      
      if ( cartQty < '{{$minAllowedCartQty}}' || isNaN(cartQty) ) {
         $('#cart-qty-'+id).val('{{$minAllowedCartQty}}');
      }

   }

   function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
         return false;
      }

      return true;
   }
</script>


<script>
  function changeTotal(id) {
    var cartQty = $('#cart-qty-'+id).val();
    var price = $('#cart-price-'+id).text();

    cartQty = parseInt(cartQty); 
    price = parseInt(price); 


    var totalPrice = cartQty*price;
    $('#total-price-'+id).text(totalPrice)


    // ajax change quantity
    $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // var quantity = $('#cart-qty-'+id).val();

    $.ajax({
        url:"{{ route('ajax.cartQty.update') }}",
        type:'POST',
        data:{id: id, quantity: cartQty},
        success:function(response){
          console.log("success response is ", response.subTotal);
          if (response.subTotal) {
            $('#sub-total').text(response.subTotal);
          }

          if (response.total) {
            $('#price-all-total').text(response.total);
          }
          
          if (response.grandTotal) {
            $('#price-grand-total').text(response.grandTotal);
          }
        },
        error:function (response) {
          console.log("error response is ", response);
        }
      });
  }

  $(document).ready(function(){
    $(this).scrollTop(390);
  });
</script>
@endsection