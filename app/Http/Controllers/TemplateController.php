<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('submenu.about');
    }

    public function service()
    {
        return view('submenu.service');
    }

    public function contact()
    {
        return view('submenu.contact');
    }
}
