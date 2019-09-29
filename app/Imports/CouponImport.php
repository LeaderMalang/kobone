<?php

namespace App\Imports;

use App\Coupon;
use Maatwebsite\Excel\Concerns\ToModel;

class CouponImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[10]=='Publish'){
            $status=1;
        }else{
            $status=0;
        }
        if($row[9]==''){
            $discount=0;
        }else {
            $discount= (int) $row[9];
        }
        return new Coupon([
            'id'     => (int) $row[0],
            'name'    => $row[1],
            'description' => $row[2],
            'coupon_type' => $row[3],
            'coupon_status' => $row[4],
            'coupon_used_times' => (int) $row[5],
            'store_id' => (int) $row[6],
            'coupon_code' => $row[7],
            'coupon_url' => $row[8],
            'discount_amount' => $discount,
            'status' => $status,
            'slug' => $row[11],
        ]);
    }
}
