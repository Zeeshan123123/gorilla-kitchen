<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // validation Rules
    public function validations($rules = []) {
        return $rules += [
            'order_method' => 'required|string',
            'payment_method' => 'required|string',
            'billing_first_name' => 'required|string|min:2|max:250',
            'billing_last_name' => 'required|string|min:2|max:250',
            'billing_phone_number' => 'required|string',
            'billing_email'  => 'required|email',
            'order_notes'  => 'nullable|string|min:2|max:1000',
            'tip'  => 'nullable|integer|gt:0',
        ];
    }


    public function store($data)
    {
        dd('store ', $data);

        return with($this);
    }
}
