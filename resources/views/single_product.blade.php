@extends('layouts.master_frontend')

@section('page_css')
<style>
.favourite, .favourite input, .favourite label {
   cursor: pointer;
}

.rating {
   margin-top: -5px;
   margin-right: 10px;
}

/* Start: css for add review section */
/* Base setup */
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

/* Ratings widget */
.rate {
    display: inline-block;
    border: 0;
}
/* Hide radio */
.rate > input {
    display: none;
}
/* Order correctly by floating highest to the right */
.rate > label {
    float: right;
}
/* The star of the show */
.rate > label:before {
    display: inline-block;
    font-size: 2rem;
    padding: .3rem .2rem;
    margin: 0;
    cursor: pointer;
    font-family: FontAwesome;
    content: "\f005 "; /* full star */
}

/* Half star trick */
.rate .half:before {
    content: "\f089 "; /* half star no outline */
    position: absolute;
    padding-right: 0;
}
/* Click + hover color */
input:checked ~ label, /* color current and previous stars on checked */
label:hover, label:hover ~ label { color: #399d5b;  } /* color previous stars on hover */

/* Hover highlights */
input:checked + label:hover, input:checked ~ label:hover, /* highlight current and previous stars */
input:checked ~ label:hover ~ label, /* highlight previous selected stars for new rating */
label:hover ~ input:checked ~ label /* highlight previous selected stars */ { color: #09742e; } 


.default-label:hover {
  color: #212529 !important;
}

fieldset {
   float: left;
}
/* End: css for add review section */


.review-form-error {
   color: red;
   margin-bottom: 25px !important ; 
   margin-top: -25px !important
}

#submit-review-message {
   font-size: 1.1rem;
   font-weight: bold;
}

.cart-qty {
   margin: 0 12px 0 12px;
}

.cart-message {
   font-size: 1.0rem;
   font-weight: bold;
   color: green;
}
</style>
@endsection


@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ $product->image_url  }}')">
   <div class="container ">
      <div class="row">
         <div class="col-md-7 col-lg-6 ">
            <h1 class="text-black fw-bold">{{ $page_title }}</h1>
         </div>
      </div>
   </div>
</section>
<!-- end titlebar section -->
<!-- book section -->
<div class="section single-product py-5">
   <div class="container py-4">
      <!-- Start: Alert Messages -->
         @include('layouts.alerts')
      <!-- End: Alert Messages -->
      <div class="row">
         <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="product-image">
               <div class="product_img_box">
                  <img class="product-img" src="{{ $product->image_url }}" alt="{{ $product->name }}" />
                  <a href="#" class="product_img_zoom" title="Zoom">
                  <i class="quantity-icon fa fa-zoom-in"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="pr_detail">
                  <div class="product_description">
                     <h4 class="product_title fw-bold"><a href="#" class="text-green">{{ $product->name }}</a></h4>
                     <div class="d-flex align-items-center justify-content-between">
                        <div class="product_price">
                           <h4 class="fw-bold price">{{ getCurrencySymbol() . $product->price }}</h4>
                        </div>
                        <div class="rating_wrap d-flex">
                           @php $rating = totalRatingCount($product->id) @endphp
                           <div class="rating">
                              <div class="star_rating">
                                 @foreach(range(1,5) as $i)
                                 <span class="fa-stack" style="width:1em">
                                    <i class="far fa-star fa-stack-1x text-green"></i>
                                    @if($rating >0)
                                       @if($rating >0.5)
                                          <i class="fa fa-star fa-stack-1x text-green"></i>
                                       @else
                                          <i class="fas fa-star-half fa-stack-1x text-green"></i>
                                       @endif
                                    @endif

                                    @php $rating--; @endphp
                                 </span>
                                 @endforeach
                              </div>
                           </div>
                           <span class="rating_num fw-bold">({{ totalReviewsCount($product->id) }})</span>
                        </div>
                     </div>
                     <div class="pr_desc">
                        <p>{!! $product->short_description !!}</p>
                     </div>
                     <div>
                        
                        <div class="checkout-form">
                           <div class="row">

                              @if( count($product->favourites) > 0 )
                              <div class="col-md-12">
                                 <h5 class="fw-bold mb-3">Choose your favourite</h5>
                                 <div class="form-control">
                                    <ul style="list-style-type:none">

                                       @foreach($product->favourites as $favourite)
                                       <li class="favourite">
                                          <input type="radio" id="{{ $favourite->name }}-{{ $favourite->id }}" name="favourite" value="{{ $favourite->id }}" {{ $loop->first ? 'checked':'' }}>
                                          <label for="{{ $favourite->name }}-{{ $favourite->id }}">{{ $favourite->name }}</label>
                                       </li>
                                       @endforeach
                                    </ul>
                                 </div>
                              </div>
                              @endif
                              

                              <div class="col-md-12">
                                 <h5 class="fw-bold mb-3">Additional information</h5>
                                 <div class="form-control">
                                    <textarea name="order_notes" rows="4" id="order-notes" placeholder="Order Notes" class="form-control">{{ session()->has('order_notes')?session()->get('order_notes'):'' }}</textarea>
                                 </div>
                              </div>
                           </div>
                           <!-- button end -->
                        </div>
                     </div>
                  </div>
                  <hr />
                  <div class="cart_extra d-flex align-items-center">
                     <div class="cart-product-quantity me-3">
                        <div class="d-flex align-items-center justify-content-center">
                           <a onclick="subQuantity()" type="button" class="quantity-icon bg-green rounded-circle text-white text-center fw-bold">-</a>
                           
                           <input onchange="maxAllowedCartQty()" onkeypress="return isNumberKey(event)" class="cart-qty" name="quantity" type="number" value="1" min="{{$minAllowedCartQty}}" max="{{$maxAllowedCartQty}}" class="border-1 border-light border-radius-3 text-center mx-2 px-3">
                           
                           <a onclick="addQuantity()" type="button" class="quantity-icon bg-green rounded-circle text-center text-white fw-bold">+</a>
                        </div>
                     </div>
                     <div class="cart_btn">
                        @if(itemExistsInCart($product->id))
                           <button type="submit" class="btn btn-3d btn-green-gradient" type="button" disabled>Add to cart</button>
                           <span class="cart-message">Already in cart.</span>
                        @else
                           <button type="submit" class="btn btn-3d btn-green-gradient" type="button">Add to cart</button>
                        @endif
                     </div>
                  </div>
                  <hr />
               </div>

               <!-- start: hidden fields -->
               <input type="hidden" value="{{ $product->id }}" name="product_id">
               <!-- end: hidden fields -->
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="large_divider clearfix"></div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="tab-style3">
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description" href="#Description" role="tab" aria-controls="Description">Description</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews"  href="#Reviews" role="tab" aria-controls="Reviews">Reviews</a>
                  </li>
               </ul>
               <div class="tab-content product_info_tab p-3 border border-top-0 border-1">
                  <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                     <p>{!! $product->long_description !!}</p>
                  </div>
                  <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                     <div class="comments container">
                        <h2 class="product_tab_title">
                           @if(count($product->reviews) < 1 )
                           No
                           @endif
                           Review For {{ $product->name }}
                        </h2>
                        <div class="row align-items-start mt-4 d-flex" style="list-style-type: none;">
                           @if(count($product->reviews) > 0 )
                           @foreach($product->reviews as $review)
                           
                           <div class="col-6 col-md-6 col-sm-12 px-2 mt-3">
                              <div class="comment_block">
                                 <div class="rating_wrap">
                                    @php $review_rating = $review->rating @endphp
                                    <div class="rating">
                                       <div class="star_rating">
                                          @foreach(range(1,5) as $i)
                                          <span class="fa-stack" style="width:1em">
                                             <i class="far fa-star fa-stack-1x text-green"></i>
                                             @if($review_rating >0)
                                                @if($review_rating >0.5)
                                                   <i class="fa fa-star fa-stack-1x text-green"></i>
                                                @else
                                                   <i class="fas fa-star-half fa-stack-1x text-green"></i>
                                                @endif
                                             @endif

                                             @php $review_rating--; @endphp
                                          </span>
                                          @endforeach
                                       </div>
                                    </div>
                                 </div>
                                 <div class="description">
                                    <p>{!! $review->description !!}</p>
                                 </div>
                                 <lead class="customer_meta mt-3">
                                    <span class="review_author">Grace Wong</span>
                                    <span class="comment-date">June 17, 2018</span>
                                 </lead>
                              </div>
                           </div>
                           @endforeach
                           @endif
                        </div>
                     </div>
                     <hr class="my-3">
                     <div class="review_form field_form">
                        <h2 class="fw-bold">Add a review</h2>

                        <!-- ajax form for storing reviews -->
                        <form class="mt-3">
                           <div class="form-group col-12">
                              <label for="name" class="default-label">{{ __('Rating') }} <span class="text-red">*</span></label>
                           </div>

                           <div class="form-group col-12">
                              
                              <div>
                                <fieldset class="img-fluid rate">
                                  <input onclick="addClassActive(10)" type="radio" id="rating10" name="rating" value="5" /><label for="rating10" title="5 stars"></label>
                                  
                                  <input onclick="addClassActive(9)" type="radio" id="rating9" name="rating" value="4.5" /><label class="half" for="rating9" title="4.5 stars"></label>
                                  
                                  <input onclick="addClassActive(8)" type="radio" id="rating8" name="rating" value="4" /><label for="rating8" title="4 stars"></label>
                                  
                                  <input onclick="addClassActive(7)" type="radio" id="rating7" name="rating" value="3.5" /><label class="half" for="rating7" title="3.5 stars"></label>
                                  
                                  <input onclick="addClassActive(6)" type="radio" id="rating6" name="rating" value="3" /><label for="rating6" title="3 stars"></label>
                                  
                                  <input onclick="addClassActive(5)" type="radio" id="rating5" name="rating" value="2.5" /><label class="half" for="rating5" title="2.5 stars"></label>
                                  
                                  <input onclick="addClassActive(4)" type="radio" id="rating4" name="rating" value="2" /><label for="rating4" title="2 stars"></label>
                                  
                                  <input onclick="addClassActive(3)" type="radio" id="rating3" name="rating" value="1.5" /><label class="half" for="rating3" title="1.5 stars"></label>
                                  
                                  <input onclick="addClassActive(2)" type="radio" id="rating2" name="rating" value="1" /><label for="rating2" title="1 star"></label>
                                  
                                  <input onclick="addClassActive(1)" type="radio" id="rating1" name="rating" value="0.5" /><label class="half" for="rating1" title="0.5 star"></label>
                                </fieldset>
                                <br />
                                <span id="rating-error" class="review-form-error"></span>
                              </div>
                           </div>
                           

                           <div class="form-group col-md-6">
                              <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text" class="form-control">
                              <div id="name-error" class="review-form-error">&nbsp;</div>
                           </div>
                           <div class="form-group col-md-6">
                              <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email" class="form-control">
                              <div id="email-error" class="review-form-error">&nbsp;</div>
                           </div>
                           
                           <div class="form-group col-12">
                              <textarea required="required" placeholder="Your review *" class="form-control" name="description" rows="4"></textarea>
                              <div id="description-error" class="review-form-error">&nbsp;</div>
                           </div>
                           
                           <div class="form-group col-12">
                              <button type="submit" class="btn btn-3d bg-green-gradient btn-submit-review" name="submit" value="Submit">Submit Review</button>
                              <span id="submit-review-message"></span>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
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

   function addQuantity() {
      var previousCartValue = $('.cart-qty').val();
      previousCartValue = parseInt(previousCartValue);

      if ( previousCartValue < '{{$maxAllowedCartQty}}' ) {
         previousCartValue = previousCartValue + 1;
         $('.cart-qty').val(previousCartValue);
      }
   }

   function subQuantity() {
      var previousCartValue = $('.cart-qty').val();
      previousCartValue = parseInt(previousCartValue);

      if (previousCartValue > '{{$minAllowedCartQty}}') {
         previousCartValue = previousCartValue - 1;
         $('.cart-qty').val(previousCartValue);
      }
   }

   function maxAllowedCartQty() {
      var cartQty = $('.cart-qty').val();

      cartQty = parseInt(cartQty);

      if (cartQty > '{{$maxAllowedCartQty}}') {
         alert('Maximum Allowed Cart Quantity is '+ '{{$maxAllowedCartQty}}');
         $('.cart-qty').val('{{$maxAllowedCartQty}}');
      }

      
      if ( cartQty < '{{$minAllowedCartQty}}' || isNaN(cartQty) ) {
         $('.cart-qty').val('{{$minAllowedCartQty}}');
      }

   }

   function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
         return false;
      }

      return true;
   }
</script>

<script type="text/javascript">
   
   $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });
   
   $(".btn-submit-review").click(function(e){

  
      e.preventDefault();

      for(let i=0; i<11; i++) {
         if ($('#rating'+i).hasClass("active-star")) {
            var rating = $('#rating'+i).val();
         }   
      }

      var name = $("input[name=name]").val();
      var email = $("input[name=email]").val();
      var description = $("textarea[name=description]").val();
      var product_id = '{{$product_id}}';

      $('#rating-error').html('&nbsp;');
      $('#name-error').html('&nbsp;');
      $('#email-error').html('&nbsp;');
      $('#description-error').html('&nbsp;');
      $('#submit-review-message').html('&nbsp;');
   
      $.ajax({
        url:"{{ route('ajax.review.store') }}",
        type:'POST',
        data:{rating: rating, name:name, email:email, description:description, product_id: product_id},
        success:function(response){
            $('#submit-review-message').text(response.message);
            $('#submit-review-message').css('color', 'green');
            // $('#submit-review-message').css('color', 'green');

            setTimeout(function () {
              let reload = confirm('Do you want to reload page to check your review?');
              if (reload) {
               location.reload(true);
              } 
            }, 1000);
        },
        error:function (response) {
            $('#rating-error').text(response.responseJSON.errors.rating);
            $('#name-error').text(response.responseJSON.errors.name);
            $('#email-error').text(response.responseJSON.errors.email);
            $('#description-error').text(response.responseJSON.errors.description);

            $('#submit-review-message').text(response.responseJSON.message);
            $('#submit-review-message').css('color', 'red');
        }
      });
  
    });
</script>
@endsection