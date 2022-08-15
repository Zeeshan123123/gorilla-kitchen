<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;

use Validator;
use Crypt;
use Response;

class FrontendController extends Controller
{
    private $productModel, $categoryModel, $reviewModel;

    public function __construct()
    {
        $this->productModel = new Product;
        $this->categoryModel = new Category;
        $this->reviewModel = new Review;
    }


    public function getProductsList()
    {
        $data = [];

        $data['page_title'] = "Order Now";

        // get current meal type with time
        // $data['foodType'] = getCurrentFoodTypeByTime();

        $data['products'] = $this->productModel->with([
            'category' => function ($q) {
                $q->orderBy('name', 'ASC');
            }
        ])
        ->where([
            'status' => 'Active',
            // 'food_type' => $data['foodType']
        ])
        ->get();

        return view('order_now', $data);
    }


    public function getCategoriesWithProducts()
    {
        $data = [];

        $data['page_title'] = "Order Now";

        $data['categoriesWithProducts'] = $this->categoryModel->with(['activeProducts'])
        ->orderByRaw("FIELD(name , 'Launch', 'Dinner', 'Pizzeria', 'Drinks') ASC"); 

        $data['categoriesWithProducts'] = $data['categoriesWithProducts']->get();

        if (request()->order_method && request()->date) {
            $selected_filters = ['order_method' => request()->order_method, 'date' => request()->date, 'time' => request()->time];
            session()->put('selected_filters', $selected_filters);
        }
        
        return view('order_now', $data);
    }


    public function getProductDetails($categorySlug, $productSlug)
    {
        $data['page_title'] = "Product Details";

        $data['product'] = $this->productModel->getDetails(['slug' => $productSlug]);
        
        $data['minAllowedCartQty'] = minAllowedCartQty();
        $data['maxAllowedCartQty'] = maxAllowedCartQty();

        $data['product_id'] = (($data['product'])?Crypt::encrypt($data['product']->id):Crypt::encrypt(0));

        return view('single_product', $data);
    }





    // ajax methods
    public function storeReview(Request $request)
    {
        $data = $request->input();
        
        $rules = $this->reviewModel->validations();

        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray(),
                'message'  => 'Error, failed to add review!'
            ), 400); // 400 being the HTTP code for an invalid request.
        }
        
        $review = $this->reviewModel->storeReview($data);

        if ( $review->id ) {
            return Response::json(array(
                'success' => true,
                'message'  => 'Review has been successfully added.'
            ), 200); // 400 being the HTTP code for an invalid request.
        }
        else {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray(),
                'message'  => 'Error, failed to add review!'
            ), 400); // 400 being the HTTP code for an invalid request.
        }
    }
}
