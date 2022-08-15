<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

use Validator;
use Crypt;
use Response;

class OrderController extends Controller
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new Order;
    }

    public function store(Request $request)
    {
        $data = $request->input();

        $rules = $this->orderModel->validations();

        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray(),
                'message'  => 'Error, failed to add order!'
            ), 400);
        }

        $order = $this->orderModel->store($data);
    }
}
