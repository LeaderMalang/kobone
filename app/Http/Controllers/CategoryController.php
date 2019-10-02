<?php

namespace App\Http\Controllers;
use App\Imports\CategoriesImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function import()
    {
        //die(storage_path('Store-Categories-Export-2019-September-27-2002.xlsx'));

        Excel::import(new CategoriesImport, storage_path('post-categories.xlsx'));

        return redirect('/')->with('success', 'All good!');
    }

}
