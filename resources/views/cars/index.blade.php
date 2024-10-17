<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Parking app</title>
</head>

<body>
    <header class="header">
        <img src="{{ asset('/assets/parking-app-logo.jpg') }}" alt="">
        <h1>
            arking app
        </h1>
    </header>
    <a href=" {{ route('cars.create') }} " class="btn-create">
        <img src="https://cdn-icons-png.flaticon.com/512/15617/15617600.png" alt="Btn create">
    </a>
    <div class="container-fluid container-cards">
        @foreach ($cars as $car)
            <div class="card text-center mb-3">
                <div class="img-container">
                    <a href="{{ route('cars.show', $car->id) }}">
                        <img class="img-card" src="{{ $car->picture }}" alt="Img card">
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        {{ $car->name }}
                    </h3>

                    <div class="container container-control">

                        <form class="index-form" method="POST" action="{{ route('cars.destroy', $car) }}">
                            @csrf
                            @method('DELETE')
                            <button class="icon-card" type="submit">
                                <img src="https://cdn-icons-png.flaticon.com/512/12060/12060944.png" alt="img trash">
                            </button>
                        </form>

                        <form class="index-form" action="{{ route('cars.edit', $car->id) }}">
                            <button class="icon-card" type="submit">
                                <img src="https://cdn-icons-png.flaticon.com/512/1827/1827933.png " alt="img edit">
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
