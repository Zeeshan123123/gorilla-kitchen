<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    // validation Rules
    public function validations($rules = []) {
        return $rules += [
            'name'  => 'required|string|min:2|max:250',
            'email'  => 'required|email',
            'description'  => 'required|string|min:2|max:1000',
            'rating' => 'required|string',
        ];
    }



    // store reviews
    public function storeReview($data)
    {
        $this->product_id = decrypt($data['product_id']);
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->description = $data['description'];
        $this->rating = $data['rating'];
        
        $this->save();

        return with($this);
    }
}
