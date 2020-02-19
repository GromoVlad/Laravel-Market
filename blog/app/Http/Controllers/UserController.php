<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id = 'Пользователь не зарегистрирован')
    {
        \Debugbar::info($id);
        return view('user', compact('id'));
    }
}
