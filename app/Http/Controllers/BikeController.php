<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function adding() {
        $bike1 = new Bike();

        $bike1->modello = 'Street';
        $bike1->marca = 'Ducati';
        $bike1->targa = 'AA999SS';

        $bike1->save();    

        $bike2 = new Bike();

        $bike2->modello = 'KTM';
        $bike2->marca = 'KTM';
        $bike2->targa = 'BB666KM';

        $bike2->save();

        $bike3 = new Bike();

        $bike3->modello = 'Strada';
        $bike3->marca = 'Honda';
        $bike3->targa = 'CC999BB';

        $bike3->save(); 

        $bike4 = new Bike();

        $bike4->modello = '883';
        $bike4->marca = 'Harley';
        $bike4->targa = 'DD444EE';

        $bike4->save();                              

    }
} 