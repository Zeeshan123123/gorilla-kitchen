<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CoupenController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clear', function() {
    $cache = Artisan::call('cache:clear');
    $view = Artisan::call('view:clear');
    $route = Artisan::call('route:clear');
    $config = Artisan::call('config:clear');

    dump(' cache = '.$cache);
    dump(' route = '.$route);
    dump(' config = '.$config);
    dd(' view = '.$view);
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');


Route::get('/{categorySlug}/{productSlug}', [FrontendController::class, 'getProductDetails'])->name('single.product');

Route::get('/book-table', function () {
    return view('book_table');
})->name('book.table');

Route::get('/gift-card', function () {
    return view('gift_card');
})->name('gift.card');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact.us');

Route::get('/merchandise', function () {
    return view('merchandise');
})->name('merchandise');

// order now page routes
Route::get('/order-now', [FrontendController::class, 'getCategoriesWithProducts'])->name('order.now');

// cart routes
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('cart/add', [CartController::class, 'addProduct'])->name('cart.add');
Route::get('cart/remove/{id}', [CartController::class, 'removeProduct'])->name('cart.remove');

// coupen routes
Route::post('/apply/coupen', [CoupenController::class, 'apply'])->name('coupen.apply');

// checkout routes
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');

// order routes
Route::post('/store/order', [OrderController::class, 'store'])->name('order.store');

// ajax routes
Route::post('ajax/store/review', [FrontendController::class, 'storeReview'])->name('ajax.review.store');
Route::post('ajax/cartQty/update', [CartController::class, 'updatecartQty'])->name('ajax.cartQty.update');
