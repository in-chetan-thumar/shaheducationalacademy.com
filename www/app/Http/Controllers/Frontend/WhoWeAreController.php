<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function directorsDesk()
    {
        return view('frontend.who-we-are.directors-desk');
    }

    public function seaAdvantage()
    {
        return view('frontend.who-we-are.sea-advantage');
    }
}
