<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
   public function store(){
       $car = new Car();

       $car->marca = 'kia';
       $car->modello = 'Picanto';
       $car->targa = 'SS842BD';

       $car->save();

       echo 'Car created!';
    }
}