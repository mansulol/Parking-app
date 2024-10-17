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
    <title>Document</title>
    <style>
        #map {
            height: 600px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-center m-2 text-primary fw-bold fs-1">Titulo ubications</h1>
    </header>

    <div class="map-ubications container-fluid">
        <div class="col-12 col-md-12 col-sm-12">
            <div id="map"></div>
        </div>
    </div>

    <script>
        let ubications = [];

        // Como no se puede mezclar php y javascript de una manera homogenea
        // Decidi obtener los valores por separatado
        @foreach ($ubications as $u)
            ubications.push({
                name: "{{ $u->name }}",
                ubication: "{{ $u->ubication }}",
                price: "{{ $u->price }}"
            });
        @endforeach

        let map = L.map('map').setView([28.123546, -15.436257], 13);

        // Añade la capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Agrega los marcadores dinámicamente
        ubications.forEach((ubi) => {
            let coords = ubi.ubication.split(',');
            let coordinateX = parseFloat(coords[0].trim());
            let coordinateY = parseFloat(coords[1].trim());

            let string = document.createElement('p')
            string.style.textAlign = "center"
            string.style.fontSize = "15px"
            string.innerHTML = `${ubi.name} <br> <strong>${ubi.price}$</strong> al día`

            L.marker([coordinateX, coordinateY]).addTo(map)
                .bindPopup(string)
                .openPopup();
        });
    </script>
</body>

</html>
