<?php

namespace App\Http\Controllers;

use App\Riders as Riders;
use Illuminate\Http\Request;

class RidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allRiders = \App\Riders::all();
        return view('riders/index', compact('allRiders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rider = new Riders();
        $rider->fio = $request->fio;
        $rider->save();
        return redirect('manage/riders');
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Riders $riders
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Riders $riders)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Riders $riders
     * @return \Illuminate\Http\Response
     */
    public function edit(Riders $riders, $id)
    {
        $rider = Riders::find($id);
        return view('riders.edit', compact('rider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Riders $riders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riders $riders, $id)
    {
        $rider = Riders::find((int)$id);
        $rider->fio = $request->fio;
        $rider->update();
        return redirect()->route('riders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Riders $riders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riders $riders, $id)
    {
        $rider = Riders::find((int)$id);
        $rider->delete();
        return redirect()->route('riders.index');
    }
}
