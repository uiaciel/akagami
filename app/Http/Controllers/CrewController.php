<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $crew = Crew::All();

        return view('crew.index', [
            'crew' => $crew
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crew = new Crew;
        $crew->subid = $request->subid;
        $crew->user_id = Auth::id();
        $crew->save();

        return redirect()->route('crew.show', $request->subid)->with('successs', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crew = Crew::where('subid', $id)->first();

        return view('crew.show', [
            'crew' => $crew,
            // 'exp' => $exp,
            // 'tahun' => $tahunlama,
            // 'lastvessel' => $lastvessel,
            // 'docs' => $document,
            // 'medicals' => $medical,
            // 'contracts' => $contract,
            // 'certificates' => $certificate

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crew $crew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crew $crew)
    {
        $crew->update($request->all());

        if ($request->hasfile('photo')) {
            $nama = time() . '-' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $nama, ['disk' => 'public']);
            $image = $path;
            $crew->update(['photo' => $image]);
        }

        // toast('Berhasil di update', 'success');
        return redirect()->back()
            ->with('success', 'Crew updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crew $crew)
    {
        //
    }
}
