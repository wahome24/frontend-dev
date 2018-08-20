<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homesponsor;

class SponsorsController extends Controller
{
    public function sponsors(){

        $sponsors = homesponsor::all();

        return view('reports.sponsors')->with('sponsors',$sponsors);

    }
}
