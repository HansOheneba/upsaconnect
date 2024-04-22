<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AlumniController extends Controller
{
    /**
     * Store a newly created alumni in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



     public function alumniRegister()
    {
        return response(view('alumni')) ;
    }
    public function submitAlu(Request $request){
       $request->validate([
            'first_name' => 'required|string',
            'other_names' => 'nullable|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'maiden_name' => 'nullable|string',
            'email' => 'required|email|unique:alumni',
            'mobile' => 'required|string',
            'admission_year' => 'required|integer',
            'completion_year' => 'required|integer',
            'course_of_study' => 'required|string',
            'occupation' => 'required|string',
        ]);

        $data['first_name'] = $request->first_name;
        $data['other_names'] = $request->other_names;
        $data['last_name'] = $request->last_name;
        $data['gender'] = $request->gender;
        $data['maiden_name'] = $request->maiden_name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['admission_year'] = $request->admission_year;
        $data['completion_year'] = $request->completion_year;
        $data['course'] = $request->course;
        $data['occupation'] = $request->occupation;
        $data['is_verified'] = false;

        dd($data);
        $alumni = Alumni::create($data);




        if(!$alumni){
            session()->flash('error', 'Registration failed');
            return redirect(route('alumni'));


        }
        ($alumni);
        session()->flash('success', 'Registration successful');
        return redirect()->back();
    }
}
