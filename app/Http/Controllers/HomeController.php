<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function changeLocale($locale)
    {
        session()->put('appLocale', $locale);
        return redirect()->back();
    }
}