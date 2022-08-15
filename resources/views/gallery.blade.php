@extends('layouts.master_frontend')

@section('page_content')
<section class="page-titlebar" style="background-image:url('{{ASSETS_FRONTEND}}img/page-titlebar-bg.jpg')">
  <div class="container ">
    <div class="row">
      <div class="col-md-7 col-lg-6 ">
        <h1 class="text-black fw-bold">Our Menu</h1>
      </div>
    </div>
  </div>
</section>
<!-- food section -->
<section class="menu-section py-5">
    <div class="container py-3">
      <div class="text-lg-start text-center mb-3">
        <h2 class="display-5 fw-bold">Checkout Our Menu</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-lg-1 mb-4">
          <ul class="nav nav-tabs border-bottom-0 flex-lg-column justify-content-center justify-content-lg-start">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cabinet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Lunch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Dinner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pizzeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Drinks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Cakes</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Cup cake</span><span class="float-end ps-1">$6.50</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Caramel</p>
                        <p class="mb-0">Vanilla</p>
                        <p><span class="text-start">Gluten Free - Raspberry</span><span class="float-end">$1</span></p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Slice</span><span class="float-end ps-1">$9</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Snicker Slice (GF)</p>
                        <p class="mb-0">Ginger Slice (GF)</p>
                        <p class="mb-0">Coconut Slice (GF)</p>
                        <p>Muesli Slice</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Muffin</span><span class="float-end ps-1">$5.50</span></h5>
                      </div>
                      <div class="menu-ingredients">                      
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Sticky Date Pudding</span><span class="float-end ps-1">$10</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Chocolate Brownie</span><span class="float-end ps-1">$9.50</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    <a href="single-product.php">
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                    <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                      <h5 class="text-green"><span class="text-start pe-1">Smoothie Bowl</span><span class="float-end ps-1">$19</span></h5>
                    </div>
                    <div class="menu-ingredients">
                      <p class="mb-0">ACAI Smoothie Bowl</p>
                      <p class="mb-0">Tropical</p>
                    </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Pancakes</span><span class="float-end ps-1">$22</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Apple Pie</p>
                        <p class="mb-0">Banoffee</p>
                        <p>Black Forrest</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Bruschetta</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Organic Tempeh</p>
                        <p class="mb-0">Scrambled Tofu</p>
                        <p>Grilled Mushrooms</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Gorilla Fila</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Scrambled Tofu</p>
                        <p>Vegan Egg Omelette</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Keto A Good Life</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>Gluten Free</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Chip off the old block</span><span class="float-end ps-1">$0</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$10</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Nacho Business</span><span class="float-end ps-1">$24</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>Gluten Free</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Seize Her Salad</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Grilled Chickun</p>
                        <p class="mb-0">Organic Tempeh</p>
                        <p>Gluten Free - Tempeh</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">BBQ Chickun Cheese Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Berber Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Frida Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Royale W Cheese Burger</span><span class="float-end ps-1">$27</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Chip off the old block</span><span class="float-end ps-1">$0</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$10</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                        <p>
                          <span class="text-start pe-1">Polenta-Ful</span>
                          <span class="float-end ps-1">$16</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Gorilla Fried Chickun</span><span class="float-end ps-1">$0</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          <span class="text-start pe-1">3 pieces</span>
                          <span class="float-end ps-1">$12</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">6 pieces</span>
                          <span class="float-end ps-1">$21</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">9 pieces</span>
                          <span class="float-end ps-1">$30</span>
                        </p>
                        <p>
                          <span class="text-start pe-1">12 pieces</span>
                          <span class="float-end ps-1">$38</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Gorilla Fried Cauli Wings</span><span class="float-end ps-1">$0</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          <span class="text-start pe-1">6 pieces</span>
                          <span class="float-end ps-1">$14</span>
                        </p>
                        <p>
                          <span class="text-start pe-1">12 pieces</span>
                          <span class="float-end ps-1">$24</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Seize Her Salad</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Grilled Chickun</p>
                        <p class="mb-0">Organic Tempeh</p>
                        <p>Gluten Free - Tempeh</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Soupa Soup</span><span class="float-end ps-1">$20</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          <span class="text-start pe-1">Gluten Free</span>
                          <span class="float-end ps-1">$2</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Phush N Chups</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          <span class="text-start pe-1">Natural Cola</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Diet Cola</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Sugar free cola</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Lemonade</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ginger Beer</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Raspberry fizz</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Lemon lime bitters</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                        <p>
                          <span class="text-start pe-1">Orange fizz</span>
                          <span class="float-end ps-1">$6.50</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Nacho Business</span><span class="float-end ps-1">$24</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>Gluten Free</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">BBQ Chickun Cheese Burger</span><span class="float-end ps-1">$24</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Berber Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Frida Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Jack N Dill Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Royale W Cheese Burger</span><span class="float-end ps-1">$27</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Ocean Warrior Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Tempeh Tantrum Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Satay Faction Burger</span><span class="float-end ps-1">$25</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Chips</p>
                        <p>Salad</p>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Vege Farm Pizza</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Onion, Mushrooms, Tomato, Capsicum, Pineapple, Baby Spinach, Jalapeno, Mozerella cheese, Sriracha Mayo
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Spicy Tofu Pizza</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Marinated Tofu, Mushrooms, Sausage, Jalapeno, Onion, Mozzarella Cheese, Ranch Dressing
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Margherita Pizza</span><span class="float-end ps-1">$21</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Inhouse Basil Paste, Cherry Tomato, Fresh Basil, Mushroom, Jalapeno, Parmesan Cheese, Feta Cheese, Mozzarella Cheese
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">BBQ Chickun & Bakon Pizza</span><span class="float-end ps-1">$26</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Sliced Chickun, Diced Bakon, Onion, Mozzarella Cheese, Oregano and BBQ Sauce
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Hawaiian Pizza</span><span class="float-end ps-1">$23</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Mozerella Cheese, Pineapple, Sliced Bakon, Onion, Parsley, Capsicum
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Cashewcado Pizza</span><span class="float-end ps-1">$26</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Avocado, Roasted Cashew, Baby Spinach, Olives, Sundried Tomato, Feta Cheese, Mozzarella Cheese
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Pepperoni Pizza</span><span class="float-end ps-1">$24</span></h5>
                      </div>
                      <div class="menu-ingredients">                        
                        <p class="mb-0">
                          <span class="text-start pe-1">Chipster</span>
                          <span class="float-end ps-1">$5</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Mexi Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Fire Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Ranch Fries</span>
                          <span class="float-end ps-1">$11</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Gorilla Couple</span><span class="float-end ps-1">$53</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Choose any two favorite pizza with one loaded fries to share from $50
                        </p>
                        <p class="mb-0">
                          Margherita Pizza
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Pepperoni Pizza</span>
                          <span class="float-end ps-1">$3</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Hawaiian Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Cashewcado Pizza</span>
                          <span class="float-end ps-1">$4</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">BBQ Chickun & Bakon Pizza</span>
                          <span class="float-end ps-1">$4</span>
                        </p>
                        <p class="mb-0">
                          Spicy Tofu Pizza
                          <span class="text-start pe-1">Spicy Tofu Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p>
                        <p class="mb-0">
                          Vege Farm Pizza
                          <span class="text-start pe-1">Vege Farm Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Gorilla Family</span><span class="float-end ps-1">$105</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>
                          Choose any four favorite pizza with two loaded fries to share from $50
                        </p>
                        <p class="mb-0">
                          Margherita Pizza
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Pepperoni Pizza</span>
                          <span class="float-end ps-1">$3</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">Hawaiian Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p> 
                        <p class="mb-0">
                          <span class="text-start pe-1">Cashewcado Pizza</span>
                          <span class="float-end ps-1">$4</span>
                        </p>
                        <p class="mb-0">
                          <span class="text-start pe-1">BBQ Chickun & Bakon Pizza</span>
                          <span class="float-end ps-1">$4</span>
                        </p>
                        <p class="mb-0">
                          Spicy Tofu Pizza
                          <span class="text-start pe-1">Spicy Tofu Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p>
                        <p class="mb-0">
                          Vege Farm Pizza
                          <span class="text-start pe-1">Vege Farm Pizza</span>
                          <span class="float-end ps-1">$2</span>
                        </p>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Mylkshake</span><span class="float-end ps-1">$6/$10</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Small</p> 
                        <p>Large</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Smoothie</span><span class="float-end ps-1">$7/$12</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Small</p> 
                        <p>Large</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">On tap - Kombucha</span><span class="float-end ps-1">$7.50/$13</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Small</p> 
                        <p>Large</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">From the chiller</span><span class="float-end ps-1">$9</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p>Banks</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Iced Coffee</span><span class="float-end ps-1">$13</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Iced Coffee</p> 
                        <p>Iced chocolate</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Coffee</span><span class="float-end ps-1">$6/$7</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Small</p> 
                        <p>Large</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">
                        Tea</span><span class="float-end ps-1">$6.50</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">Earl Grey</p>
                        <p class="mb-0">English Breakfast</p>
                        <p class="mb-0">Peppermint Yerbemate</p>
                        <p class="mb-0">Moon Tea</p>
                        <p class="mb-0">Turmeric Tonic</p>
                        <p class="mb-0">Citrine Detox</p>
                        <p class="mb-0">Elderflower Tonic</p>
                        <p class="mb-0">Blue Velvet</p>
                        <p class="mb-0">Himalayan Organic Chai</p>
                        <p class="mb-0">Green Jasmine White</p>
                        <p class="mb-0">Salvation</p>
                        <p class="mb-0">KLG</p>
                        <p class="mb-0">Bloom</p>
                        <p class="mb-0">Repose</p>
                        <p class="mb-0">Roasted</p>
                        <p class="mb-0">Calrify</p>
                        <p class="mb-0">Mayan Man Original</p>
                        <p class="mb-0">Mayan Man Peppermint</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Black Coffee</span><span class="float-end ps-1">$4.50</span></h5>
                      </div>
                      <div class="menu-ingredients">
                        <p class="mb-0">
                          Expresso
                        </p> 
                        <p class="mb-0">
                          Macchiato
                        </p> 
                        <p class="mb-0">
                          Long black
                        </p> 
                        <p>                          
                          Americano
                        </p>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
              <div class="row">
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Carrot cake</span><span class="float-end ps-1">$70</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Red Valvet</span><span class="float-end ps-1">$70</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Black Forrest</span><span class="float-end ps-1">$80</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Chocolate</span><span class="float-end ps-1">$70</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
                  <div class="col-lg-6 menu-item filter-starters mb-3">
                    <a href="single-product.php">
                      <div class="menu-content position-relative justify-content-space-between overflow-hidden">
                        <h5 class="text-green"><span class="text-start pe-1">Vanilla Cake</span><span class="float-end ps-1">$70</span></h5>
                      </div>
                      <div class="menu-ingredients"></div>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end food section -->
<section class="py-5 py-md-0 px-3" style="background:url({{ASSETS_FRONTEND}}img/CTA-bg.jpg) center center;">
  <div class="container p-md-0">
    <div class="row justify-content-left">
      <div class="col-md-7 col-lg-6 bg-white bg-opacity-50 px-3 py-4 p-md-5">
            <h5 class="fw-bold text-green text-uppercase">Buy food gift cards from gorilla kitchen</h5>
            <h2 class="text-black fw-bold">A gift card may be a better gift idea for your loved ones</h2>
            <p class="text-black">
              The food gift card is a great way to show appreciation for your loved ones and to share their favorite foods with them.
            </p>
            <a class="btn btn-3d bg-green-gradient">Buy Gift Card</a>
      </div>
    </div>
  </div>
</section>
@endsection