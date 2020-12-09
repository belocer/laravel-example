<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index () {
        dump($_ENV['MY_SETTING']);
        dump(config('app.timezone'));
        dump(config('database.connections.mysql.database'));
        dump($_ENV);
        return view('home', ['var' => 6545666]);
    }

}