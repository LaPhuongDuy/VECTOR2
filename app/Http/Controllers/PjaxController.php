<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PjaxController extends Controller
{
    public function index()
    {
        return view('pjax.master');
    }
    public function trang1()
    {
        return view('pjax.trang1');
    }

    public function trang2()
    {
        return view('pjax.trang2');
    }

    public function trang3()
    {
        return view('pjax.trang3');
    }

}
