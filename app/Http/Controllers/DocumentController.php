<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $document = new Document;
        $document->crew_id = $request->crew_id;
        $document->no = $request->no;
        $document->type = $request->type;

        $fileName = time() . '-' . $request->type . '-' . $request->no . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);

        $document->path = '/file/' . $fileName;

        $document->place = $request->place;
        $document->country = $request->country;
        $document->issued = $request->issued;
        $document->valid = $request->valid;
        $document->save();

        toast('Document uploaded successfully', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc = Document::findorfail($id);
        $doc->delete();

        toast('Documents deleted.', 'success');
        return redirect()->back();
    }
}
