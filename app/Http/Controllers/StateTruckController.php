<?php

namespace App\Http\Controllers;

use App\StateTruck;
use Illuminate\Http\Request;

class StateTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allState = \App\StateTruck::all();
        return view('state/index', compact('allState'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new StateTruck();
        $state->val_state = $request->val_state;
        $state->save();
        return redirect('manage/states');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StateTruck $stateTruck
     * @return \Illuminate\Http\Response
     */
    public function show(StateTruck $stateTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StateTruck $stateTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(StateTruck $stateTruck, $id)
    {
        $state = StateTruck::find($id);
        return view('state.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\StateTruck $stateTruck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StateTruck $stateTruck, $id)
    {
        $state = StateTruck::find((int)$id);
        $state->val_state = $request->val_state;
        $state->update();
        return redirect('manage/states');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StateTruck $stateTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(StateTruck $stateTruck,$id)
    {
        $state = StateTruck::find((int)$id);
        $state->delete();
        return redirect()->route('manage/states');
    }
}
