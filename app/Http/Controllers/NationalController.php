<?php

namespace App\Http\Controllers;

use App\Models\National;
use Illuminate\Http\Request;

class NationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationals = National::all();

        return view('national.index', [
            'nationals' => $nationals

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('national.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $national = new National;
        $national->name = $request->name;
        $national->save();

        // toast('Post created successfully.', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function show(National $national)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function edit(National $national)
    {
        $companies = National::find($national)->first();
        $nationals = National::all();

        return view('national.edit', [
            'companies' => $companies,
            'nationals' => $nationals
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, National $national)
    {
        $national->update($request->all());

        // toast('National updated.', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function destroy(National $national)
    {
        $national->delete();

        toast('National deleted.', 'success');
        return redirect()->back();
    }
}
