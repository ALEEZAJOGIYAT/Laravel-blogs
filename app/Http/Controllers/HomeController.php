<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       if(Auth::user()->hasRole('user')){
        $posts =post::all();
        return view('user.blogs',compact('posts'));
       }elseif(Auth::user()->hasRole('admin')){
            return view('admin/home');
        }
    }
}
