<?php

namespace App\Http\Controllers;

use App\Riders;
use App\StateTruck;
use App\Trucks;
//use App\User;
use App\TypeTrucks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTruck = \App\Trucks::all();
        return view('trucks/index', compact('allTruck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $riders = Riders::all();
        $types = TypeTrucks::all();
        $states = StateTruck::all();
        // return view('trucks.create', ['riders' => $riders, 'types' => $types, 'states' => $states]);
        return view('trucks.create')->with([
            'riders' => $riders,
            'types' => $types,
            'states' => $states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTruck = new Trucks();
        $newTruck->name = $request->name_truck;
        $newTruck->type_truck_id = $request->type_truck;
        $newTruck->rider_id = $request->rider;
        $newTruck->state_truck_id = $request->state_truck;
        $newTruck->save();
        return redirect('manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trucks $trucks
     * @return \Illuminate\Http\Response
     */
    public function show(Trucks $trucks)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trucks $trucks
     * @return \Illuminate\Http\Response
     */
    public function edit(Trucks $trucks, $id)
    {
        $truck = Trucks::find($id);
        $riders = Riders::all();
        $types = TypeTrucks::all();
        $states = StateTruck::all();

        return view('trucks.edit')->with([
            'truck' => $truck,
            'riders' => $riders,
            'types' => $types,
            'states' => $states
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Trucks $trucks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trucks $trucks, $id)
    {
        $newTruck = Trucks::find($id);
        $newTruck->name = $request->name_truck;
        $newTruck->type_truck_id = $request->type_truck;
        $newTruck->rider_id = $request->rider;
        $newTruck->state_truck_id = $request->state_truck;
        $newTruck->save();
        return redirect('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trucks $trucks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trucks $trucks, $id)
    {
        $truck = Trucks::find((int)$id);
        $truck->delete();
        return redirect()->route('manage.index');
    }

    public function view(){
        return view('trucks.view');
    }
}
