<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FormRegistration;

class FormController extends Controller
{
    public function index()
    {
        return view('front-page.form.index');
    }
}
