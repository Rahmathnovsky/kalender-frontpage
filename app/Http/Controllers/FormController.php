<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FormRegistration;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function formRegistration(Request $request)
    {
        return view('front-page.form.index');
    }

    public function formRegistrationSubmit(Request $request)
    {
        try {
            // dd($request->all());
            DB::beginTransaction();
            FormRegistration::create($request->all());
            DB::commit();
            Alert::success('Terimakasih Sobat', 'Data Diri Kamu Sudah ALEN Terima :)');
            return redirect()->back();
        } catch(\Throwable $th){
            DB::rollback();
            Alert::error('Yahh Gagal', 'Coba Kembali Dong Sobat ALEN');
            return redirect()->back();
        }
    }
}
