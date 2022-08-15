<?php

use App\Models\Review;


/*
$server_protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
$base_path = $server_protocol . $_SERVER['SERVER_NAME'];
*/

// staging
// $base_path = 'http://zee456.codewithwaqar.com/zee456/api/public/';

// dev
$base_path = 'http://127.0.0.1:8000';


define('BASE_PATH', $base_path.'/');

define('ASSETS', BASE_PATH);

define('ASSETS_FRONTEND', BASE_PATH.'assets/frontend/');

// Uploaded Images
define('UPLOADS', BASE_PATH.'images/profile/');

// Public Path
define('PUBLICS_PATH', BASE_PATH);


function getCurrentFoodTypeByTime() {
	$current_hours = \Carbon\Carbon::now()->format('H');
	$mealtype = 'other';

	if($current_hours >= 9 && $current_hours <= 17) {
	  $mealtype = 'launch';
	} else if($current_hours > 17 && $current_hours <= 21) {
	  $mealtype = 'dinner';
	}

	return $mealtype;
}

function getCurrentFoodTypeBySelectedTime($time = null) {
	$convertedTimeTo24hrs = date("H", strtotime($time));
	$minutes = date("i", strtotime($time));
	
	$mealType = 'other';
	
	if($convertedTimeTo24hrs >= 9 && ($convertedTimeTo24hrs < 17)) {
	  $mealType = 'launch';
	} else if(($convertedTimeTo24hrs >= 17) && $convertedTimeTo24hrs <= 21) {
	  $mealType = 'dinner';
	}

	return $mealType;
}

function getCurrencySymbol($symbol='$')
{
	return $symbol;
}

function totalReviewsCount($product_id = null)
{
	return Review::
    when($product_id, function($query) use ($product_id) {
        $query->where('product_id', $product_id);
    })
    ->count();
}

function totalRatingCount($product_id = null)
{
	return Review::
    when($product_id, function($query) use ($product_id) {
        $query->where('product_id', $product_id);
    })
    ->avg('rating');
}


function countCartProducts() {
	$cartCollection = \Cart::getContent();
	
	return $cartCollection->count();
}


function maxAllowedCartQty()
{
	return 999;
}

function minAllowedCartQty()
{
	return 1;
}


function truncateText($string)
{
	return \Illuminate\Support\Str::limit($string, 80, $end='...');
}

function getShippingPrice()
{
	$price = 5;
	return $price;
}

function getCoupenDiscount() {
	if (session()->get('coupen') && isset(session()->get('coupen')['discount'])) {
		return session()->get('coupen')['discount'];
	} else {
		return false;
	}
}

function getGrandTotal()
{
	$total = \Cart::getSubTotal()-getShippingPrice();
	
	if (session()->get('coupen') && isset(session()->get('coupen')['discount'])) {
		$total = $total - session()->get('coupen')['discount'];
	} 

	return $total;
}


function itemExistsInCart($id = null) {
	$cart = \Cart::getContent();

	return $cart->contains('id', $id);
}


function getRecords($model = null, $where = [], $order = 'DESC')
{
	$model = "App\Models\\$model";
	
	return $model::
        when($where, function($query) use ($where) {
            $query->where($where);
        })
        ->orderBy('id', $order)
        ->get();
}

function getOrderMethods()
{
	return ['Take Away', 'Delivery', 'Dine-in'];
}

function getOrderTimes()
{
	return [
		'11:00 AM',
		'11:30 AM',
		'12:00 PM',
		'12:30 PM',
		'01:00 PM',
		'01:30 PM',
		'02:00 PM',
		'02:30 PM',
		'03:00 PM',
		'03:30 PM',
		'04:00 PM',
		'04:30 PM',
		'05:00 PM',
		'05:30 PM',
		'06:00 PM',
		'06:30 PM',
		'07:00 PM',
		'07:30 PM',
		'08:00 PM',
		'08:30 PM'
	];
}


function getSelectedOrderMethod() {
	if (session()->get('selected_filters') && isset(session()->get('selected_filters')['order_method'])) {
		return session()->get('selected_filters')['order_method'];
	} else {
		return false;
	}
}

function getSelectedOrderDate() {
	if (session()->get('selected_filters') && isset(session()->get('selected_filters')['date'])) {
		return session()->get('selected_filters')['date'];
	} else {
		return false;
	}
}

function getSelectedOrderTime() {
	if (session()->get('selected_filters') && isset(session()->get('selected_filters')['time'])) {
		return session()->get('selected_filters')['time'];
	} else {
		return false;
	}
}