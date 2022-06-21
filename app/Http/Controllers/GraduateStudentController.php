<?php

namespace App\Http\Controllers;

use App\Models\GraduateStudent;
use Illuminate\Http\Request;

class GraduateStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dummy
        $list_lulusan = GraduateStudent::all();
        return dd($list_lulusan);
        // return view('school.index', compact('list_lulusan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraduateStudent  $graduateStudent
     * @return \Illuminate\Http\Response
     */
    public function show(GraduateStudent $graduateStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraduateStudent  $graduateStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(GraduateStudent $graduateStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraduateStudent  $graduateStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraduateStudent $graduateStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraduateStudent  $graduateStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraduateStudent $graduateStudent)
    {
        //
    }
}
