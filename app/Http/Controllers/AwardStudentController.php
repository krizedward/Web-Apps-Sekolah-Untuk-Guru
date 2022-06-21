<?php

namespace App\Http\Controllers;

use App\Models\AwardStudent;
use Illuminate\Http\Request;

class AwardStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dummy
        $list_prestasi = AwardStudent::all();
        // return dd($list_murid);
        return view('award_student.index', compact('list_prestasi'));
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
     * @param  \App\Models\AwardStudent  $awardStudent
     * @return \Illuminate\Http\Response
     */
    public function show(AwardStudent $awardStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwardStudent  $awardStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardStudent $awardStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwardStudent  $awardStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwardStudent $awardStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwardStudent  $awardStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwardStudent $awardStudent)
    {
        //
    }
}
