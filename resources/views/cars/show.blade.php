<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/ubication.css">
    <title>Parking App - Car Location</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4 fs-1 fw-bold">Car Information</h1>

        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <img src="{{ $car->picture }}" class="img-fluid rounded-start" alt="Car Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">Ubication: {{ $car->ubication }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script>
        // Consigo las coordenadas y las envuelvo en u string
        let coordinates = "{{ $car->ubication }}";

        let coordinateX = parseFloat(coordinates.split(',')[0].trim());
        let coordinateY = parseFloat(coordinates.split(',')[1].trim());


        let map = L.map('map').setView([coordinateX, coordinateY], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([coordinateX, coordinateY]).addTo(map)
            .bindPopup("{{ $car->name }}")
            .openPopup();
    </script>

</body>

</html>
