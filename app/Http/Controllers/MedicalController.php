<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MedicalController extends Controller
{
    public function index()
    {
        $medical = Medical::all();

        return view('medical.index', compact('medical'));
    }

    public function create()
    {
        return view('medical.create');
    }

    public function store(Request $request)
    {
        // Medical::create($request->all());
        $medical = new Medical;
        $medical->crew_id = $request->crew_id;
        $medical->type = $request->type;
        $medical->date = $request->date;
        $medical->description = $request->description;

        $fileName = time() . '-' . Str::slug($request->type) . '-' . $request->crew_id . '.' . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);

        $medical->path = '/file/' . $fileName;

        $medical->save();

        toast('Medical Upload.', 'success');
        return back()->with('message', 'item stored successfully');
    }

    public function show(Medical $medical)
    {
        return view('medical.show', compact('medical'));
    }

    public function edit(Medical $medical)
    {
        return view('medical.edit', compact('medical'));
    }

    public function update(Request $request, Medical $medical)
    {
        $medical->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    public function destroy(Medical $medical)
    {
        $medical->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
