<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();

        return view('contract.index', compact('contracts'));
    }

    public function create()
    {
        return view('contract.create');
    }

    public function store(Request $request)
    {
        $contract = new Contract;
        $contract->crew_id = $request->crew_id;
        $contract->no = $request->no;
        $contract->type = $request->type;
        $contract->vessel_name = $request->vessel_name;
        $contract->embarkation = $request->embarkation;

        $fileName = time() . '-' . Str::slug($request->vessel_name) . '-' . $request->crew_id . '.' . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);

        $contract->pdf = '/file/' . $fileName;

        $contract->save();

        toast('contract Upload.', 'success');
        return back()->with('message', 'item stored successfully');
    }

    public function show(Contract $contract)
    {
        return view('contract.show', compact('Contract'));
    }

    public function edit(Contract $contract)
    {
        return view('contract.edit', compact('Contract'));
    }

    public function update(Request $request, Contract $contract)
    {
        $contract->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    public function destroy(Contract $contract)
    {
        $contract->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
