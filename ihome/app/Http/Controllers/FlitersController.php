<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Orphan;
class FlitersController extends Controller
{

    public function sort() {

        if(isset($_POST['submit'])){
        $orphans = Orphan::where(function($query){

            $age = Input::has('age') ? Input::get('age') : null;

            $orphans = Input::has('orphans') ? Input::get('orphans') : [];

            if(isset($age)) {
               
                 if(isset($orphans)){
                foreach ($orphans as $orphan) {
                    $query->where('age','=', $age)
                       -> where('gender','=',$orphan);
                }
            }
                 $query->where('age','=', $age);
            }

           


    

        })->get();

        return view('samaritan.samprofile')->with('orphans',$orphans);

        }
      
    }


   

     
}

