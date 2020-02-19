<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formGet()
    {
        return view('formGet');
    }

    public function formPost()
    {
        return view('formPost');
    }
}
