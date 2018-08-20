<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\management;

class PagesController extends Controller
{
    public function soco(){
        return view('welcome');
    }

    public function faq(){
        return view('faqs');
    }

    public function samlis(){
        return view('samlis.index');
    }

    public function samaritan(){
        return view('samaritan.home');
    }
    

    public function reports(){
        return view('portal.reports');
    }

    public function login(){
        return view('functions.login');
    }

}
