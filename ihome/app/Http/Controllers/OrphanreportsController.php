<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orphan;

class OrphanreportsController extends Controller
{
    public function index(){
     $orphans= Orphan::all();
        return view('reports.orphans')->with('orphans',$orphans);

    }
}
