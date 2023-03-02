<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        $data = [
            'title'=>'HomePage'
        ];
        return view('Home/home',$data);
    }
}
