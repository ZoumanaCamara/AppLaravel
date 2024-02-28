<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('pageGuest'); 
    }

    public function index() : View
    {
        return view('home.auth'); 
    }

    public function pageGuest() 
    {
        return view('home.index'); 
    }
}
