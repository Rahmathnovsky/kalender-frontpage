<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumber;
use App\Models\FormRegistration;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Success', 'Post created successfully');
            return redirect()->back();
        } catch(\Throwable $th){
            DB::rollback();
            Alert::error('Error', 'Failed to create post');
            return redirect()->back();
        }
    }

    public function formRegistration(Request $request)
    {
        return view('front-page.form.index');
    }
}
