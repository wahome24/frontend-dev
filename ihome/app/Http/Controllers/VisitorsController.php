<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit;

class VisitorsController extends Controller
{
    public function visit(){
        $visitors = visit::all();
        return view('reports.visits')->with('visitors',$visitors);
    }
}
