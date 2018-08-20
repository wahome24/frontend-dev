<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'date' => 'required'
       ]);

       $plan = new visit;
       $plan->name=$request->input('name');
       $plan->organization=$request->input('organization');
       $plan->email=$request->input('email');
       $plan->date=$request->input('date');
       $plan->number=$request->input('number');
       $plan-> save();
        
        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $organization = $_POST['organization'];
        $mailFrom = $_POST['email'];
        $date = $_POST['date'];
        $number = $_POST['number'];


        $mailTo= "ihomeke@gmail.com";
        $headers = "From:" . $mailFrom;
        $txt = "You have a booked visit  from: " .$name. ".\n\n" . "Name of the organization: " .$organization . "\n\n" . "Date of visit: " .$date . "\n\n" ."Number of visitors: " .$number;
        $subject= "Planned Visit";

        mail($mailTo,$subject,$txt,$headers);
    }

       return redirect('/samaritan')-> with('success','Details Submitted!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
