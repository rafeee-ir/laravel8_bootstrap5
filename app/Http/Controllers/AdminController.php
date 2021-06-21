<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    function __construct()
    {
//        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
//        $this->middleware('permission:role-create', ['only' => ['create','store']]);
//        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function panel(Request $request)
    {
        return view('admin.panel');

    }
}
