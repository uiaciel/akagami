<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Experience;
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
        return view('crew.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crew = new Crew;
        $crew->subid = $request->subid;
        $crew->name = $request->name;
        $crew->birth = $request->birth;
        $crew->place = $request->place;
        $crew->save();

        return redirect()->route('crew.show', $request->subid)->with('successs', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $crew = Crew::where('subid', $id)->first();
        $exp = Experience::where('crew_id', $crew->id)->OrderBy('signoff', 'asc')->get();
        $tahunlama = Experience::where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('signon')->first();
        $lastvessel = Experience::with('shipname')->where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('vesselsname')->first();
        // $document = Document::where('crew_id', $crew->id)->get();
        // $certificate = Certificate::where('crew_id', $crew->id)->get();
        // $medical = Medical::where('crew_id', $crew->id)->get();
        // $contract = Contract::where('crew_id', $crew->id)->get();

        return view('crew.show', [
            'crew' => $crew,
            'exp' => $exp,
            'tahun' => $tahunlama,
            'lastvessel' => $lastvessel,
            // 'docs' => $document,
            // 'medicals' => $medical,
            // 'contracts' => $contract,
            // 'certificates' => $certificate

        ]);

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
