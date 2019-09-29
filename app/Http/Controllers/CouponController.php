<?php

namespace App\Http\Controllers;

use App\Imports\CouponImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class CouponController extends Controller
{
    public function import()
    {
        //die(storage_path('Store-Categories-Export-2019-September-27-2002.xlsx'));

        Excel::import(new CouponImport, storage_path('final-coupons.xlsx'));

        return redirect('/')->with('success', 'All good!');
    }
}
