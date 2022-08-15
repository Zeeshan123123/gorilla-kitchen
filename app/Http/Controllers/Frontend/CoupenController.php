<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Coupen;

class CoupenController extends Controller
{
    public function apply(Request $request)
    {
        $coupen = new Coupen;

        if ( $request->isMethod('post') ) {
            $data = $request->all();
            $coupen_detail = $coupen->getCoupenDetailByCode( $data['coupon_code'] );
            
            if ( $coupen_detail ) {
                if ( $coupen_detail->expiry_date < date('Y-m-d') ) {
                    return back()->with('error', 'Coupen code has been expired.');
                } else {
                    session()->put('coupen', [
                        'name' => $coupen_detail->code,
                        'discount' => $coupen->discount( $coupen_detail->code, \Cart::getSubTotal() ),
                    ]);

                    session()->flash('success', 'Coupen has been applied.');
                    
                    return redirect()->back();
                }
            } else {
                session()->flash('error', 'Coupen code does not exists.');
                    
                return redirect()->back();
            }
        }
    }
}
