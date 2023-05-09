<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $ships = Ship::all();

        return view('ship.index', [
            'ships' => $ships

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ship = new Ship;
        $ship->name = $request->name;
        $ship->save();

        // toast('Post created successfully.', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function show(Ship $ship)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function edit(Ship $ship)
    {
        $ship = Ship::find($ship)->first();
        $ships = Ship::all();

        return view('ship.edit', [
            'ship' => $ship,
            'ships' => $ships
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ship $ship)
    {
        $ship->update($request->all());

        // toast('Ship updated.', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ship $ship)
    {
        $ship->delete();

        toast('Ship deleted.', 'success');
        return redirect()->back();
    }
}
