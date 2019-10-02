<?php

namespace App\Http\Controllers;
use App\Imports\StoresImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Store;
use App\Category;
use App\Coupon;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function import()
    {
        //die(storage_path('Store-Categories-Export-2019-September-27-2002.xlsx'));

        Excel::import(new StoresImport, storage_path('final-stores.xls'));

        return redirect('/')->with('success', 'All good!');
    }
    public function countCoupons($stores){
        foreach ($stores as $store) {
            $itemCount = $store->coupons()->count();
            $store->setAttribute('count', $itemCount);
        }
        return $stores;
    }
    public function index(Request $request){
        if($request->isMethod('get')) {
            $name=$request->input('letter');
            $category=$request->input('category');
            $categories=Category::all();
            if($name==null || $category==null){
                $stores = Store::with('coupons')->paginate(15);
                $storesWithCount=$this->countCoupons($stores);

                return view('stores', ['stores' => $storesWithCount,'search'=>false,'categories'=>$categories]);
            }else {
                $stores=Store::has('categories')->where('name', 'LIKE', "$name%")->get();
                $storesWithCount=$this->countCoupons($stores);
                return view('stores', ['stores' => $storesWithCount,'search'=>true,'categories'=>$categories]);
            }

        }else{
            abort(403, 'Unauthorized action.');
        }
    }
    public function storeCoupons(Request $request,$storeSlug){
        if($request->isMethod('get')){

            $storecoupons=Store::with('coupons')->where('slug','=',$storeSlug)->get();
            //die($storecoupons);
            return view('store-details',['storeCoupons'=>$storecoupons]);
        }else{
            abort(403, 'Unauthorized action.');
        }

    }

}
