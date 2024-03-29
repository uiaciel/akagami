<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Contract;
use App\Models\Crew;
use App\Models\Document;
use App\Models\Experience;
use App\Models\Medical;

use App\Models\Preview;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('print.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->data);

        $data = collect($request->data);
        // return $data;

        $to = $request->to;
        $from = $request->from;
        $date = $request->date;
        $embark = $request->embark;
        $attn = $request->attn;
        $vassel = $request->vassel;
        $signoff = $request->signoff;
        $port = $request->port;


        $crew = Crew::whereIn('id', $data)->get();
        // dd($crew);
        return view('print.crews', [
            'crewx' => $crew,
            'to' => $to,
            'from' => $from,
            'date' => $date,
            'embark' => $embark,
            'attn' => $attn,
            'vassel' => $vassel,
            'signoff' => $signoff,
            'port' => $port,
        ]);
    }

    public function crews(Request $request)
    {
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
        $document = Document::where('crew_id', $crew->id)->get();
        $certificate = Certificate::where('crew_id', $crew->id)->get();
        $medical = Medical::where('crew_id', $crew->id)->get();
        $contract = Contract::where('crew_id', $crew->id)->get();

        return view('crew.print', [
            'crew' => $crew,
            'exp' => $exp,
            'tahun' => $tahunlama,
            'lastvessel' => $lastvessel,
            'docs' => $document,
            'medicals' => $medical,
            'contracts' => $contract,
            'certificates' => $certificate

        ]);
    }

    public function shows($data)
    {

        $datanya = collect($data);

        $crew = Crew::whereIn('id', $datanya)->get();
        return view('crew.test', [
            'crew' => $crew
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preview $preview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preview $preview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preview $preview)
    {
        //
    }
}
