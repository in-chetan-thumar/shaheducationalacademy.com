<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }
    public function disclaimer()
    {
        return view('frontend.disclaimer.disclaimer');
    }
    public function privacyPolicy()
    {
        return view('frontend.index');
    }

}