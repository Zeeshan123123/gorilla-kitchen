<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;



    // pass status when want to get according to status type
    public function getCategories( $condition = null ) {
        return Category::
        when($condition, function($query) use ($condition) {
            $query->where($condition);
        })
        ->orderBy('id', 'DESC')
        ->get();
    }



    // foreign key relations
    public function activeProducts()
    {

        return $this->hasMany(Product::class,'category_id')->where( function($query) {
            $condition = ['status' => 'Active'];
            if (request()->store) {
                $condition += ['store_id' => request()->store];
            }
            
            $query->where($condition);
        })
        ->orderBy('id','Desc');
    }

    public function activeProductsWithStore()
    {
        $data = $this->hasMany(Product::class,'category_id')->where( function($query) {
            $query->where(['status' => 'Active' , 'store_id' => request()->store]);
        })
        ->orderBy('id','Desc');
    }

    public function activeProductsWithFoodType()
    {
        return $this->hasMany(Product::class,'category_id')->where( function($query) {
            $query->where(['status' => 'Active' , 'food_type' => getCurrentFoodTypeByTime()]);
        })
        ->orderBy('id','Desc');
    }
    
}
