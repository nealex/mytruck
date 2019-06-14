<?php

namespace App\Http\Controllers;

use App\Company;
use App\Trucks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrucksApiController extends Controller
{
    public function index()
    {
      //  return Company::all();
        return $allTruck = \App\Trucks::all();
    }

    public function show($id)
    {
        return Trucks::find($id)->toArray();
    }

}
