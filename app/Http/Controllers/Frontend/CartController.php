<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

use Response;

class CartController extends Controller
{
    private $productModel;

    
    function __construct()
    {  
        $this->productModel = new Product;
    }


    // show cart page
    public function cart()
    {
        $data = [];
        $data['page_title'] = "Cart";

        $data['cartItems'] = \Cart::getContent();

        $data['minAllowedCartQty'] = minAllowedCartQty();
        $data['maxAllowedCartQty'] = maxAllowedCartQty();

        return view('cart', $data);
    }


    // add items to the cart
    public function addProduct(Request $request)
    {
        $data = [];
        $data['page_title'] = "Cart";

        if (isset($request->order_notes)) {
            session()->put('order_notes', $request->order_notes);
        }

        $product = $this->productModel->find($request->product_id);
        
        \Cart::add([
            'id' => $request->product_id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $product->image_url,
                'description' => $product->short_description,
                'order_additional_information' => (isset($request->additional_information)?$request->additional_information:''),
            )
        ]);
        session()->flash('success', 'Item is Added to Cart Successfully !');

        return redirect()->route('cart');   
        // return redirect()->back();   
    }


    public function removeProduct($id)
    {
        \Cart::remove($id);
        session()->flash('success', 'Item is Removed from the Cart Successfully !');

        return redirect()->route('cart');
    }


    // ajax methods
    public function updatecartQty(Request $request)
    {
        try {
            $data = $request->input();

            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );

            $subTotal = \Cart::getSubTotal();
            $total = \Cart::getSubTotal()-getShippingPrice();
            $grandTotal = getGrandTotal();

            // dd(\Cart::getContent());
            return Response::json(array(
                'success' => true,
                'message'  => 'Cart has been successfully updated.',
                'subTotal' => $subTotal,
                'total' => $total,
                'grandTotal' => $grandTotal,
            ), 200); 
        } catch (Exception $e) {
            return Response::json(array(
                'success' => false,
                'message'  => 'Error, something went wrong.'
            ), 400); // 400 being the HTTP code for an invalid request.
        }
        

        // return redirect()->route('cart.list');
    } 
}
