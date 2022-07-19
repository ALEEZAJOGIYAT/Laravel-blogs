<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\category;


class ShowController extends Controller
{
    public function showCategories()
    {
        $categories = category::all(); //fetch all cate$category from DB

        return view('admin.category.show',['categories',$categories]);

    }


}
