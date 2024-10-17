<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/create-update.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Parking App - Create</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="fs-1 fw-bold">Create Parking</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the parking">
                            </div>

                            <div class="mb-3">
                                <label for="ubication" class="form-label">Ubication</label>
                                <input type="text" class="form-control" id="ubication" name="ubication" placeholder="Ubication of the parking">
                            </div>

                            <div class="mb-3">
                                <label for="picture" class="form-label">Image</label>
                                <input type="file" class="form-control" id="picture" name="picture">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back to the list</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
