<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function gallery() {
        return view('galleria');
    }

    public function form() {
        return view('form');
    }

    public function info() {
        return view('info&faq');
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
