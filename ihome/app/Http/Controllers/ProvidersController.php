<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class ProvidersController extends Controller
{
    public function service(){
        $services = service::all();
        return view('reports.services')->with('services',$services);
    }
}
