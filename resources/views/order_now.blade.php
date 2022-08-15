@extends('layouts.master_frontend')
@section('page_title') {{ $page_title }} @endsection
@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
   <div class="container ">
      <div class="row">
         <div class="col-md-7 col-lg-6 ">
            <h1 class="text-black fw-bold">{{ $page_title }}</h1>
         </div>
      </div>
   </div>
</section>
<!-- food section -->
<section class="food_section py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <p class="fw-bold text-center">Lunch Timings: Tue - Fri: 11am till 5pm, Sat - Sun: 9am till 5pm<br/>
               Dinner Timings: Tue - Sun: 5pm till 9pm
            </p>

            <small class="text-success">* Please select all fields from below for applying filters.</small>
            <form id="filters" action="{{ route('order.now') }}" method="get" role="form" class="php-email-form filter-form">
               <div class="row">
                  
                  <div class="col-md-3 form-group">
                     <select onchange="submitForm()" name="store" class="form-control" id="store" placeholder="Pick Ordering Method">
                        <option value="">Select store</option>
                        @foreach(getRecords('Store', ['status' => 'Active'], 'ASC') as $store)
                           <option value="{{ $store->id }}" {{ (request()->store == $store->id)?'selected':'' }}>{{ $store->name }}</option>
                        @endforeach
                     </select>
                     <div class="validate"></div>
                  </div>
                  <div class="col-md-3 form-group">
                     <select onchange="submitForm()" name="order_method" class="form-control" id="order_method" placeholder="Pick Ordering Method">
                        <option value="">Select order method</option>
                        @foreach(getOrderMethods() as $orderMethod)
                        <option value="{{ $orderMethod }}" {{ (request()->order_method == $orderMethod)?'selected':'' }}>{{ $orderMethod }}</option>
                        @endforeach
                     </select>
                     <div class="validate"></div>
                  </div>
                  <div class="col-md-3 form-group">
                     <input onchange="submitForm()" type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ (request()->date)?request()->date:'' }}">
                     <div class="validate"></div>
                  </div>
                  <div class="col-md-3 form-group">
                     <select onchange="submitForm()" class="form-control" name="time" id="time" placeholder="Time">
                        <option value="">Select Time</option>
                        @foreach(getOrderTimes() as $orderTime)
                        <option value="{{ $orderTime }}" {{ (request()->time == $orderTime)?'selected':'' }}>{{ $orderTime }}</option>
                        @endforeach
                     </select>
                     <div class="validate"></div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   @foreach($categoriesWithProducts as $categoryWithProduct)
   @if($loop->first)
   <div class="row justify-content-center">
      <div class="col-md-9 text-center">
         <h2 class="fw-bold display-4">
           Menu
         </h2>          
      </div>
   </div>
   @endif

   <!-- commented food type fetched with time -->
   @if(request()->time)
      @if(getCurrentFoodTypeBySelectedTime(request()->time) == 'launch' && $categoryWithProduct->slug == 'dinner')
         @continue;
      @endif

      @if(getCurrentFoodTypeBySelectedTime(request()->time) == 'dinner' && $categoryWithProduct->slug == 'launch')
         @continue;
      @endif
   @endif
   

   <div class="container pb-5">
      <div class="row">
         <div class="col-md-12">
            <h2 class="fw-bold">
               {{ $categoryWithProduct->name }}
            </h2>
            <p>{!! $categoryWithProduct->description !!}</p>
         </div>
         @if(count($categoryWithProduct->activeProducts) > 0)
         @foreach($categoryWithProduct->activeProducts as $product)
         <div class="col-sm-6 col-lg-4">
            <div class="box">
               <div>
                  <a href="{{ route('single.product', ['categorySlug'=>$categoryWithProduct->slug , 'productSlug'=>$product->slug]) }}" class="product-details-modal">
                     <div class="img-box">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-100 h-100">
                     </div>
                     <div class="detail-box ">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <h5 class="text-black">
                              {{ $product->name }}
                           </h5>
                           <div class="icon-box d-flex">
                              <i class="fa fa-seedling d-flex bg-green justify-content-center text-white align-items-center rounded-circle me-1" aria-hidden="true" title="{{ $product->name }}"></i>
                           </div>
                        </div>
                        <div class="options d-flex align-items-center justify-content-between">
                           <h6 class="text-black">
                              {{ getCurrencySymbol() . $product->price }}
                           </h6>
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
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         @endforeach
         @else 
         <div>
            <h5>
            No food available for this category.
            <h5>
         </div>
         @endif
      </div>
   </div>
   @endforeach
</section>
<!-- end food section -->
@endsection

@section('page_scripts')
<script>
   function submitForm() {
      if (event.target.value ) {
         var store = $('#store').val();
         var orderMethod = $('#order_method').val();
         var date = $('#date').val();
         var time = $('#time').val();

         if(store && orderMethod && date && time) {
            $('#filters').submit();
         }
      }
      
   }
</script>
@endsection