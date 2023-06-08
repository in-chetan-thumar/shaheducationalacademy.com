<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SEAConnectController extends Controller
{
    public function questionPapersIndex()
    {
        return view('frontend.sea-connect.question-papers');
    }
    public function solutionsIndex()
    {
        $solutions = resolve('solution-repo')->object();
        return view('frontend.sea-connect.solutions', compact('solutions'));
    }
    public function assignmentsIndex()
    {
        $assignments = resolve('assignment-repo')->object();
        return view('frontend.sea-connect.assignments', compact('assignments'));
    }
}