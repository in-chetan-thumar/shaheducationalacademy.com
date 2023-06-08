<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.contact');
    }

    public function store(ContactRequest $request)
    {
        try {
            DB::beginTransaction();
            $params = [];
            $params = $request->validated();
            $contact = resolve('contact-repo')->create($params);
            if (!empty($contact)) {
                DB::commit();
                Session::flash('message', 'Success'); 
                return to_route('frontend.contact');
            }
            DB::rollBack();
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
