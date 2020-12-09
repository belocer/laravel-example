<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index () {
        return view('home', ['var' => 6545666]);
    }

}