<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleContoller extends Controller
{
    public function homepage() {
        return view('homepage');
    }


    public function aboutpage(){


        return '<h1>about page</h1><a href="/">back page</a>';
    }
}
