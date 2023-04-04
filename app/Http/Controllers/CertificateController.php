<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = new Certificate;
        $data->crew_id = $request->crew_id;
        $data->category = $request->category;
        $data->type = $request->type;

        $fileName = time() . '-' . Str::slug($request->category) . '-' . $request->crew_id . '.' . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);

        $data->path = '/file/' . $fileName;

        // $data->path = $request->path;
        $data->no = $request->no;
        $data->place = $request->place;
        $data->issued = $request->issued;
        $data->valid = $request->valid;
        $data->save();

        toast('Certificate update successfully.', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
