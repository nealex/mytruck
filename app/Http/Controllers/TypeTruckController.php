<?php

namespace App\Http\Controllers;

use App\TypeTrucks;
use Illuminate\Http\Request;

class TypeTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allType = \App\TypeTrucks::all();
        return view('types/index', compact('allType'));
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
        $type = new TypeTrucks();
        $type->val = $request->val;
        $type->save();
        return redirect('manage/types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeTrucks $typeTrucks
     * @return \Illuminate\Http\Response
     */
//    public function show(TypeTrucks $typeTrucks)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeTrucks $typeTrucks
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeTrucks $typeTrucks, $id)
    {
        $type = TypeTrucks::find($id);
        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\TypeTrucks $typeTrucks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeTrucks $typeTrucksб, $id)
    {

        $type = TypeTrucks::find((int)$id);
        $type->val = $request->val;
        $type->update();
        return redirect()->route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeTrucks $typeTrucks
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeTrucks $typeTrucks,$id)
    {
        $type = TypeTrucks::find((int)$id);
        $type->delete();
        return redirect()->route('types.index');
    }
}
