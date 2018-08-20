<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Orphan;

class OrphansController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $orphans= Orphan::orderBy('id','desc')->get();
        return view('samaritan.samprofile')->with('orphans',$orphans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.orphanrec');
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
            'sponsorship' => 'required',
            'bio'=> 'required',
            'profilephoto' => 'image|nullable|max:5000'

        ]);
             //handle the file uploading
                if($request->hasFile('profilephoto')){
                    //get filename with extension
                    $filenameWithExt = $request ->file('profilephoto')-> getClientOriginalName();
                    //get just filename
                    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    //get just the ext
                    $extension = $request->file('profilephoto')-> getClientOriginalExtension();
                    //create file to store

                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    //upload image
                    $path = $request->file('profilephoto')->storeAs('public/profilephoto',$fileNameToStore);

                }else{
                    $fileNameToStore = 'noimage.png';
                }

        //create post

        $orphan = new Orphan;
        $orphan->name=$request->input('name');
        $orphan->age=$request->input('age');
        $orphan->date=$request->input('date');
        $orphan->gender=$request->input('gender');
        $orphan->sponsorship=$request->input('sponsorship');
        $orphan->education=$request->input('education');
        $orphan->bio=$request->input('bio');
        $orphan->user_id= auth()->user()->id;
        $orphan->profilephoto= $fileNameToStore;
        $orphan->save();
        return redirect('/records')->with('success', 'Record created');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orphan= Orphan::find($id);
        return view('samaritan.goodview') -> with('orphan',$orphan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orphan= Orphan::find($id);
        return view('samaritan.samedit') -> with('orphan',$orphan);
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
         $this->validate($request, [
            'name' => 'required',
            'sponsorship' => 'required',
            'bio'=> 'required'

        ]);

        //handle the file uploading
                if($request->hasFile('profilephoto')){
                    //get filename with extension
                    $filenameWithExt = $request ->file('profilephoto')-> getClientOriginalName();
                    //get just filename
                    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    //get just the ext
                    $extension = $request->file('profilephoto')-> getClientOriginalExtension();
                    //create file to store

                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    //upload image
                    $path = $request->file('profilephoto')->storeAs('public/profilephoto',$fileNameToStore);

                }
        //create post

        $orphan = Orphan::find($id);
        $orphan->name=$request->input('name');
        $orphan->age=$request->input('age');
        $orphan->date=$request->input('date');
        $orphan->gender=$request->input('gender');
        $orphan->sponsorship=$request->input('sponsorship');
        $orphan->education=$request->input('education');
        $orphan->bio=$request->input('bio');
        if($request->hasFile('profilephoto')){
           $orphan->profilephoto = $fileNameToStore;
        }
        $orphan->save();
        return redirect('/records')->with('success', 'Record updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orphan= Orphan::find($id);
        //delete uploaded image

         if($orphan->profilephoto != 'noimage.png'){
            //delete the image
           // Storage::delete('public/profilephoto/'.$orphan->profilephoto);
        }

        $orphan->delete();
        return redirect('/records')->with('success', 'Record deleted!');

    }

}
