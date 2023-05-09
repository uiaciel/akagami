<?php

namespace App\Http\Controllers;

use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $ports = Port::all();

        return view('port.index', [
            'ports' => $ports

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('port.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $port = new Port;
        $port->name = $request->name;
        $port->save();

        // toast('Post created successfully.', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Port  $port
     * @return \Illuminate\Http\Response
     */
    public function show(Port $port)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Port  $port
     * @return \Illuminate\Http\Response
     */
    public function edit(Port $port)
    {
        $port = Port::find($port)->first();
        $ports = Port::all();

        return view('port.edit', [
            'port' => $port,
            'ports' => $ports
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Port  $port
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Port $port)
    {
        $port->update($request->all());

        // toast('Port updated.', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Port  $port
     * @return \Illuminate\Http\Response
     */
    public function destroy(Port $port)
    {
        $port->delete();

        toast('Port deleted.', 'success');
        return redirect()->back();
    }
}
