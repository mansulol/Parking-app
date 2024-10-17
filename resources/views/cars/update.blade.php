<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/create-update.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Parking App - Update Car</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4 fs-1 fw-bold update-title">Update Parking</h1>

        <div class="card p-4 shadow-sm">
            <form method="POST" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $car->name }}" type="text" class="form-control" id="name" name="name"
                        placeholder="Name of the parking" required>
                </div>

                <div class="form-group mb-3">
                    <label for="ubication" class="form-label">Ubication</label>
                    <input value="{{ $car->ubication }}" type="text" class="form-control" id="ubication" name="ubication"
                        placeholder="Ubication of the parking" required>
                </div>

                <div class="form-group mb-3 text-center">
                    <label class="form-label fs-4">Current Image</label>
                    <div class="img-container mb-2">
                        <img src="{{ $car->picture }}" alt="Current Parking Image" class="img-fluid rounded"
                            style="max-width: 200px; height: auto;">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="picture" class="form-label">Update Image</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>

                <div class="d-grid gap-2 d-md-block text-center">
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HoA+BniwAJcQ60iyPAPG1X5u7JyoayOaC+uR9s7C8+6ihKRuO8m0vW+PX5hzT1sc" crossorigin="anonymous">
    </script>
</body>

</html>
