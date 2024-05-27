<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->intended();
        dd($request->user());
    }
}
