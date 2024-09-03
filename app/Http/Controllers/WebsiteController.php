<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumber;
use App\Models\FormRegistration;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('front-page.index');
    }

    public function registrationPhone(Request $request)
    {
        try {
            DB::beginTransaction();
            PhoneNumber::create($request->all());
            DB::commit();
            return redirect()->back();
        } catch(\Throwable $th){
            DB::rollback();
        }
    }

    public function formRegistration(Request $request)
    {
        return view('front-page.form.index');
    }
}
