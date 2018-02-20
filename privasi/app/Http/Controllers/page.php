<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Share;

class page extends Controller
{

    public function index()
    {
    	$datas = app('App\Http\Controllers\bagikan')->bagikan();
        return view('home')->with('datas', $datas);
    }
    public function ucc()
    {
    	$datas = app('App\Http\Controllers\bagikan')->bagikan();
        return view('ucc')->with('datas', $datas);
    }

}
