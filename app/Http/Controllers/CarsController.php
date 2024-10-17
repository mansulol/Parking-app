<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cars;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view("cars.index", compact("cars"));
    }

    public function create()
    {
        return view("cars.create");
    }

    public function store(Request $request)
    {
        $car = new Cars;

        $car->name = $request->input('name');
        $car->ubication = $request->input('ubication');
        $car->picture = $request->input('picture');
        $car->save();

        return redirect()->route("cars.index");
    }

    public function destroy($id)
    {
        Cars::find($id)->delete();

        return redirect()->route("cars.index");
    }

    public function show($findCarsId)
    {
        $cars = Cars::find($findCarsId);

        return view("cars.index", compact("cars"));
    }

    // Edit method para el icono de editar

    // Update method para la pagina de update
    public function update(Request $request, $id) {
        $car = Cars::findOrFail($id);
        $car->name = $request->input('name');
        $car->ubication = $request->input('ubication');
        $car->picture = $request->input('picture');
        $car->save();

        return redirect()->route("cars.index");
    }


    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view("cars.update", compact("car"));
    }
}
