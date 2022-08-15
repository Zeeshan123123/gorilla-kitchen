<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupen extends Model
{
    use HasFactory;




    // coupen details
    public function getCoupenDetail( $id = null ) {
        return Coupen::
        when($id, function($query) use ($id) {
            $query->where('id', '=', $id);
        })->first();
    }

    // coupen details by code
    public function getCoupenDetailByCode( $code ) {
        return Coupen::where('code', '=', $code)->where('status', '=', 'Enable')->first();
    }


    // calculate discount
    public function discount( $coupen_code, $total )
    {
        $coupen_detail = $this->getCoupenDetailByCode($coupen_code);
        
        if ( $coupen_detail->amount_type == 'fixed' ) {
            return $coupen_detail->amount;
        } else if ( $coupen_detail->amount_type == 'percent' ) {
            return ( $coupen_detail->amount / 100 ) * $total;
        } else {
            return 0;
        }
    }
}
