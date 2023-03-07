<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view ('homepage');
    }

    public function layanan()
    {
        return view ('layanan');
    }

    public function jumlahuttp()
    {
        return view ('jumlahuttp');
    }
}
