<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homesponsor;

class HomesponsorsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'mobile'=>'required'
        ]);

        $sponsorship= new homesponsor;
        $sponsorship->name=$request->input('name');
        $sponsorship->organization=$request->input('organization');
        $sponsorship->email=$request->input('email');
        $sponsorship->mobile=$request->input('mobile');
        $sponsorship->sponsorship=$request->input('sponsorship');
        $sponsorship->message=$request->input('message');
        $sponsorship->save();

        if(isset($_POST['submit'])){
            $name= $_POST['name'];
            $organization= $_POST['organization'];
            $email= $_POST['email'];
            $mobile= $_POST['mobile'];
            $sponsorship= $_POST['sponsorship'];
            $message= $_POST['message'];

            $mailTo= "ihomeke@gmail.com";
            $headers = "From: " . $email;
            $txt = "You have  a new sponsor: " . $name . "\n\n" . "Name of the Organization: " .$organization . "\n\n" . "Mobile number: " . $mobile ."\n\n". "Type of Sponsorship: ". $sponsorship . "\n\n" . "Remarks:" .$message;
            $subject= "Sponsor Alert";

            mail($mailTo,$subject,$txt,$headers);

        }
         return redirect('/samaritan')-> with('success','Submitted Successfuly!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
