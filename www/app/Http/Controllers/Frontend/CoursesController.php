<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function fYJCIndex()
    {
        return view('frontend.courses.undergraduate-courses.f-y-j-c');
    }
    public function sYJCIndex()
    {
        return view('frontend.courses.undergraduate-courses.s-y-j-c');
    }
    public function iscCommerceIndex()
    {
        return view('frontend.courses.undergraduate-courses.isc-commerce');
    }
    public function bComIndex()
    {
        return view('frontend.courses.graduate-courses.b-com');
    }
    public function bMSIndex()
    {
        return view('frontend.courses.graduate-courses.b-m-s');
    }
    public function bAFIndex()
    {
        return view('frontend.courses.graduate-courses.b-a-f');
    }
    public function bBIIndex()
    {
        return view('frontend.courses.graduate-courses.b-b-i');
    }
    public function bFMIndex()
    {
        return view('frontend.courses.graduate-courses.b-f-m');
    }

    public function charteredAccountancyIndex()
    {
        return view('frontend.courses.professional-courses.chartered-accountancy');
    }
    public function companySecretaryIndex()
    {
        return view('frontend.courses.professional-courses.company-secretary');
    }
    public function mComIndex()
    {
        return view('frontend.courses.professional-courses.m-com');
    }

    public function testSeriesIndex()
    {
        return view('frontend.courses.test-series');
    }

    public function crashCourseIndex()
    {
        return view('frontend.courses.crash-course');
    }

    public function seminarsIndex()
    {
        return view('frontend.courses.seminar');
    }
}
