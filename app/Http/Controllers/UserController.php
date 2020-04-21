<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.showStudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.addStudentForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =  User::find(Auth::id());
        $students = new Student();
        $students->firstname = $request->get('firstname');
        $students->lastname = $request->get('lastname');
        $students->gender = $request->get('gender');
        $students->class = $request->get('class');
        $students->year = $request->get('year');
        $students->provicne = $request->get('province');
        $students->picture = $request->get('picture');
        $students->status = $request->get('status');
        $students->user_id = $user->id;  
        $students->save();
        return redirect('showStudents'); 
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
        $student = Student::find($id);
        return view('students.editFormStudent',compact('student'));
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
        $student = Student::find($id);
        $student->update([
                        'firstname'=>$request->firstname,
                        'lastname'=>$request->lastname,
                        'gender'=>$request->gender,
                        'class'=>$request->class,
                        'year'=>$request->year,
                        'province'=>$request->province,
                        'picture'=>$request->picture,
                        'status'=>$request->status,
                        ]);
                        return redirect('showStudents');
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
