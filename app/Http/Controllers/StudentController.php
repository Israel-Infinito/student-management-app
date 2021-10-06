<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Student::all();
        return view('profile.index')->with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
        
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
            'age' => 'required',
            'nationality' => 'required',
            'sex' => 'required',
            'university' => 'required',
            'department' => 'required'

        ]);
        $profile = new Student;
        $profile->name = $request->input('name');
        $profile->age = $request->input('age');
        $profile->nationality = $request->input('nationality');
        $profile->sex = $request->input('sex');
        $profile->university = $request->input('university');
        $profile->department = $request->input('department');
        $profile->save();
        
        return redirect('/profile')->with('success', 'Student Profile Created'); 

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
        $profile = Student::find($id);
        return view ('profile.edit')->with('profile', $profile);
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
            'age' => 'required',
            'nationality' => 'required',
            'sex' => 'required',
            'university' => 'required',
            'department' => 'required'

        ]);
        $profile = Student::find($id);
        $profile->name = $request->input('name');
        $profile->age = $request->input('age');
        $profile->nationality = $request->input('nationality');
        $profile->sex = $request->input('sex');
        $profile->university = $request->input('university');
        $profile->department = $request->input('department');
        $profile->save();
        
        return redirect('/profile')->with('success', 'Student Profile Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Student::find($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('success','Profile deleted successfully');
    }
}
