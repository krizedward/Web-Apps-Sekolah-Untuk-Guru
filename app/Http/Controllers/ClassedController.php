<?php

namespace App\Http\Controllers;

use App\Models\Classed;
use Illuminate\Http\Request;

class ClassedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dummy
        $list_kelas = Classed::all();
        // return dd($classed);
        return view('classed.index', compact('list_kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dummy
        $classed = 'create page';
        return dd($classed);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dummy
        $classed = 'store process';
        return dd($classed);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classed  $classed
     * @return \Illuminate\Http\Response
     */
    public function show(Classed $classed)
    {
        //dummy
        $classed = 'show page '.$classed;
        return dd($classed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classed  $classed
     * @return \Illuminate\Http\Response
     */
    public function edit(Classed $classed)
    {
        //dummy
        $classed = 'edit page '.$classed;
        return dd($classed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classed  $classed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classed $classed)
    {
        //dummy
        $classed = 'update page '.$classed;
        return dd($classed);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classed  $classed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classed $classed)
    {
        //dummy
        $classed = 'delate page '.$classed;
        return dd($classed);
    }
}
