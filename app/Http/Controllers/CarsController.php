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

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'ubication' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $car = new Cars;
        $car->name = $request->input('name');
        $car->ubication = $request->input('ubication');

        // Convertir la imagen a Base64
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageData = file_get_contents($image->getRealPath());
            $base64 = 'data:' . $image->getClientMimeType() . ';base64,' . base64_encode($imageData);
            $car->picture = $base64; // Guardar la imagen en formato Base64
        }

        $car->save();

        return redirect()->route("cars.index")->with('success', 'Parking created successfully.');
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
    public function update(Request $request, $id)
{
    // Encuentra el coche por su ID
    $car = Cars::findOrFail($id);

    // Actualiza los campos de nombre y ubicación
    $car->name = $request->input('name');
    $car->ubication = $request->input('ubication');

    // Verificar si se ha subido una nueva imagen
    if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $imageData = file_get_contents($image);
        $base64Image = 'data:' . $image->getMimeType() . ';base64,' . base64_encode($imageData);

        // Actualizar la imagen en base64
        $car->picture = $base64Image;
    }

    // Guardar los cambios
    $car->save();

    return redirect()->route('cars.index')->with('success', 'Car updated successfully');
}



    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view("cars.update", compact("car"));
    }
}
