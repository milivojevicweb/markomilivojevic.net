<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('front.pages.home');
    }

    public function about(){
        return view('front.pages.about');
    }

    public function page404(){
        return view('errors.404');
    }

}
