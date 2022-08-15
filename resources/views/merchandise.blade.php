@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Merchandise</h1>
      </div>
    </div>
  </div>
</section>
<!-- food section -->
<section class="food_section layout_padding">
  <div class="container pb-5">
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div>
              <a href="single-product.php" class="product-details-modal">
                <div class="img-box">
                  <img src="{{ASSETS_FRONTEND}}img/products/front.jpeg" alt="Printed Tee" class="w-100 h-100">
                </div>
                <div class="detail-box ">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="text-white">
                      Printed Tee
                    </h5>
                  </div>
                  <div class="options d-flex align-items-center justify-content-between">
                    <h6 class="text-white">
                      $10
                    </h6>
                    <div class="star">
                      <i class="fa fa-star text-green"></i>
                      <i class="fa fa-star text-green"></i>
                      <i class="fa fa-star text-green"></i>
                      <i class="fa fa-star text-green"></i>
                      <i class="fa fa-star text-green"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- end food section -->
@endsection