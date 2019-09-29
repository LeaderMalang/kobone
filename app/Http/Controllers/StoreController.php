<?php

namespace App\Http\Controllers;
use App\Imports\StoresImport;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function import()
    {
        //die(storage_path('Store-Categories-Export-2019-September-27-2002.xlsx'));

        Excel::import(new StoresImport, storage_path('final-stores.xls'));

        return redirect('/')->with('success', 'All good!');
    }
}
