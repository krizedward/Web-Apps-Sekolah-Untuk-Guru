<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classed;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dummy
        $list_murid = Student::all();
        // return dd($list_murid);
        return view('student.index', compact('list_murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            'nis' => 'required',
            'nisn' => 'required',
            'name' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'name_student_guardian' => 'required',
            'status_student_guardian' => 'required',
            // 'photo_student' => 'required',
        ]);

        Student::create([
            "class_id" => '1',
            "teacher_id" => '1',
            "nis" => $request->nis,
            "nis" => $request->nis,
            "nisn" => $request->nisn,
            "name" => $request->name,
            "place_of_birth" => $request->place_of_birth,
            "date_of_birth" => $request->date_of_birth,
            "religion" => $request->religion,
            "address" => $request->address,
            "gender" => $request->gender,
            "name_student_guardian" => $request->name_student_guardian,
            "status_student_guardian" => $request->status_student_guardian,
            "photo_student" => "photoStudent/images.jpg",
        ]);

        // return view('student.index');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //dummy
        $teacher = 'edit page '.$student.' nama';
        return dd($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
