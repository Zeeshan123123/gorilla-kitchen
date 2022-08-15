@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Blog</h1>
      </div>
    </div>
  </div>
</section>
 <!-- end titlebar section -->
<section class="py-5">
   <div class="container">
     <div class="row">            
            <div class="col-md-4 px-3">
              <div class="item-box-blog rounded-3 shadow">
                <div class="item-box-blog-image mb-0">
                  <figure class="mb-0"> 
                    <img alt="" src="{{ASSETS_FRONTEND}}img/blog-11.jpg"> 
                  </figure>
                </div>
                <div class="item-box-blog-body p-3">
                  <div class="item-box-blog-title mb-2">
                    <a href="" class="text-decoration-none">
                      <h2 class="fw-bold text-black">
                        The best table in town
                      </h2>
                    </a>
                  </div>
                  <!--Excerpt-->
                  <div class="item-box-blog-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor pellentesque ex convallis mollis. Nullam tortor quam, cursus et odio vitae, hendrerit maximus erat. Mauris quis blandit nisi.
                    </p>
                  </div>
                  <!--Read More Button
                  <div class=""> 
                    <p class="read-more-link mb-1">
                      <a href="" class="btn btn-gradient-green text-white px-4 py-2">Read More</a>
                    </p>
                  </div>-->
                </div>
              </div>
            </div>
            <div class="col-md-4 px-3">
              <div class="item-box-blog rounded-3 shadow">
                <div class="item-box-blog-image mb-0">
                  <figure class="mb-0"> 
                    <img alt="" src="{{ASSETS_FRONTEND}}img/blog-22.jpg">
                  </figure>
                </div>
                <div class="item-box-blog-body p-3">
                  <div class="item-box-blog-title mb-2">
                    <a href="" class="text-decoration-none">
                      <h2 class="fw-bold text-black">
                        We now accept Square!
                      </h2>
                    </a>
                  </div>
                  <!--Excerpt-->
                  <div class="item-box-blog-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor pellentesque ex convallis mollis. Nullam tortor quam, cursus et odio vitae, hendrerit maximus erat. Mauris quis blandit nisi.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 px-3">
              <div class="item-box-blog rounded-3 shadow">
                <div class="item-box-blog-image mb-0">
                  <figure class="mb-0"> 
                    <img alt="" src="{{ASSETS_FRONTEND}}img/blog-33.jpg">
                  </figure>
                </div>
                <div class="item-box-blog-body p-3">
                  <div class="item-box-blog-title mb-2">
                    <a href="" class="text-decoration-none text-">
                      <h2 class="fw-bold text-black">
                        The best coffee in town
                      </h2>
                    </a>
                  </div>
                  <!--Excerpt-->
                  <div class="item-box-blog-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor pellentesque ex convallis mollis. Nullam tortor quam, cursus et odio vitae, hendrerit maximus erat. Mauris quis blandit nisi.
                    </p>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </section>  
@endsection