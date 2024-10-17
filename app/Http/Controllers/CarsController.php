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

    public function show($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    protected function getCoordinates($address)
    {
        $address = urlencode($address);
        $url = "https://nominatim.openstreetmap.org/search?q={$address}&format=json&limit=1";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (!empty($data) && isset($data[0]['lat'], $data[0]['lon'])) {
            return [
                'latitude' => $data[0]['lat'],
                'longitude' => $data[0]['lon']
            ];
        }

        return null;
    }

    public function update(Request $request, $id)
    {
        $car = Cars::findOrFail($id);

        $car->name = $request->input('name');
        $car->ubication = $request->input('ubication');

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageData = file_get_contents($image);
            $base64Image = 'data:' . $image->getMimeType() . ';base64,' . base64_encode($imageData);

            $car->picture = $base64Image;
        }

        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view("cars.update", compact("car"));
    }
}
