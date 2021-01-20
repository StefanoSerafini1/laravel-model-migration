<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    //
    public function index() {
        //richieste tutte le bikes con API json

        $bikes = Bike::all();

        return response()->json($bikes);
    }
}
