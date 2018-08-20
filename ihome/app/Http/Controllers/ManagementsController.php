<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination;
use App\management;

class ManagementsController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=management::all();
        return view('samaritan.management')-> with('records', $records);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.mgmtrec');
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
             'name' => 'required',
             'bio' => 'required',
             'profilepic' => 'image|nullable'

        ]);
   //handle the file uploading
     if($request->hasFile('profilepic')){
         //get filename with extension
         $filenameWithExt = $request ->file('profilepic')-> getClientOriginalName();
         //get just filename
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          //get just the ext
          $extension = $request->file('profilepic')-> getClientOriginalExtension();
          //create file to store

          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          //upload image
          $path = $request->file('profilepic')->storeAs('public/profilepics',$fileNameToStore);

     }else{
         $fileNameToStore = 'noimage.png';
     }
     //create a new record

       $record= new management;
       $record->name=$request->input('name');
       $record->date=$request->input('date');
       $record->gender=$request->input('gender');
       $record->bio=$request->input('bio');
       $record->user_id= auth()->user()->id;
       $record->profilepic=$fileNameToStore;
       $record->save();

       return redirect('/management')-> with('success','Record Created');


     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $record = management::find($id);
       return view('samaritan.samview')->with('record',$record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $record = management::find($id);
       return view('samaritan.edit')->with('record',$record); 
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
          $this->validate($request,[
             'name' => 'required',
             'bio' => 'required'

        ]);

        //handle the file uploading
        if($request->hasFile('profilepic')){
            //get filename with extension
            $filenameWithExt = $request ->file('profilepic')-> getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just the ext
            $extension = $request->file('profilepic')-> getClientOriginalExtension();
            //create file to store

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('profilepic')->storeAs('public/profilepics',$fileNameToStore);

        }
     
       //create a new record

       $record= management::find($id);
       $record->name=$request->input('name');
       $record->date=$request->input('date');
       $record->gender=$request->input('gender');
       $record->bio=$request->input('bio');
       if($request->hasFile('profilepic')){
           $record->profilepic = $fileNameToStore;
       }
       $record->save();

       return redirect('/management')-> with('success','Record updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record= management::find($id);

        if($record->profilepic != 'noimage.png'){
            //delete the image
            Storage::delete('public/profilepics/'.$record->profilepic);
        }

        $record->delete();
        return redirect('/management')-> with('success','Record deleted!');
    }


    
}

