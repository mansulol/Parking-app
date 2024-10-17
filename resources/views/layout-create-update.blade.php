<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/create-update.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Parking app</title>
</head>

<body>

    <h1>@yield('title-page')</h1>

        <form method="POST" action="{{ route('cars.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the parking">
            </div>

            <div class="form-group">
                <label for="ubication">Ubication</label>
                <input type="text" class="form-control" id="ubication" name="ubication"
                    placeholder="Ubication of the parking">
            </div>
            <div class="form-group">
                <label for="picture">Img</label>
                <input type="file" class="form-control" id="picture" name="picture"
                    placeholder="Picture of the parking">
            </div>

            <button type="submit" class="btn btn-primary"> Create </button>

        </form>

        <a href="{{ route('cars.index') }}"> Back to the list </a>


    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
