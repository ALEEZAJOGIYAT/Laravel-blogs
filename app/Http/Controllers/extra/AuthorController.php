<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorController extends Controller
{
    //
    function data()
    {
        $data= Http::get('http://localhost:9000/api/authors');
        //1st param-> name of view file
        return view('author', ['data'=> $data['0']]);
    }
    function showData()
    {
        return Http::get('http://localhost:9000/api/authors');        
    }
}
