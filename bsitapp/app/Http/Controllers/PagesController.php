<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return view('partials.frontend.index');
    }
    public function header(){
        return view('partials.frontend.header');
    }
    public function about(){
        return view('partials.frontend.about');
    }
    public function services(){
        return view('partials.frontend.services');
    }
    public function portfolio(){
        return view('partials.frontend.portfolio');
    }
    public function Faq(){
        return view('pages.FAQsection');
    }
    public function team(){
        return view('partials.frontend.team');
    }
    public function clients(){
        return view('partials.frontend.clients');
    }
    public function contact(){
        return view('partials.frontend.contact');
    }
    public function footer(){
        return view('partials.frontend.footer');
    }
}
