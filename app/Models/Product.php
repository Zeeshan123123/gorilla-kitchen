<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;





    // pass status when want to get according to status type
    public function getProducts( $condition = null ) {
        return Product::
        when($condition, function($query) use ($condition) {
            $query->where($condition);
        })
        ->orderBy('id', 'DESC')
        ->get();
    }


    public function getDetails( $condition = null ) {
        return Product::
        when($condition, function($query) use ($condition) {
            $query->where($condition);
        })
        ->first();
    }



    // foreign key relations
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault();
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
}
