<?php

namespace App\Http\Controllers;

use App\Models\Ubications;
use Illuminate\Http\Request;

class UbicationsController extends Controller
{
    public function index(){
        $ubications = Ubications::all();
        return view("cars.ubications", compact("ubications"));
    }
}
