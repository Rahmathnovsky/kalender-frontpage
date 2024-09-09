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
            Alert::success('Terimakasih Sobat', 'Tunggu Whatsapp Dari ALEN ya Sobat');
            return redirect()->back();
        } catch(\Throwable $th){
            DB::rollback();
            Alert::error('Yahh Gagal', 'Coba Kembali Dong Sobat ALEN');
            return redirect()->back();
        }
    }
}
