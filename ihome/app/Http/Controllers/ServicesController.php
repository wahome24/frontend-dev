<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class ServicesController extends Controller
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
            'name'=>'required',
            'email'=>'required'
        ]);

        $service= new service;
        $service->name=$request->input('name');
        $service->email=$request->input('email');
        $service->mobile=$request->input('mobile');
        $service->type=$request->input('type');
        $service->remarks=$request->input('remarks');
        $service->save();

        
        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $mobile = $_POST['mobile'];
        $type = $_POST['type'];
        $remarks = $_POST['remarks'];


        $mailTo= "ihomeke@gmail.com";
        $headers = "From:" . $mailFrom;
        $txt = "You have a new service provider: " .$name . "\n\n" . "Service Type: " .$type. "\n\n" . "Mobile: " .$mobile. "\n\n" . "Remarks: " .$remarks ;
        $subject= "service provider";

        mail($mailTo,$subject,$txt,$headers);
    }
        return redirect('/samaritan')->with('details submitted!');

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
