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
                                <label for="name" class="form-label update-title">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name of the parking">
                            </div>

                            <div class="mb-3">
                                <label for="ubication" class="form-label update-title">Ubication</label>
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" id="ubication" name="ubication"
                                        placeholder="Ubication of the parking">
                                    <button class="btn btn-sm ms-2 btn-ubication" type="button"
                                        onclick="getLocation()">
                                        <img class="img-ubication"
                                            src="https://cdn-icons-png.flaticon.com/512/6339/6339264.png"
                                            alt="Img ubication">
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="picture" class="form-label update-title">Image</label>
                                <input type="file" class="form-control" id="picture" name="picture"
                                    onchange="previewImageCreatePage(event)">
                            </div>

                            <div class="form-group mb-3 text-center">

                                <div class="img-container" id="newImageContainer" style="display: none;">
                                    <img id="newImagePreview" src="#" alt="New Parking Image">
                                </div>
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
    <script src="{{ asset('/js/ubication.js') }}"></script>
    <script>
        function previewImageCreatePage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const newImagePreview = document.getElementById("newImagePreview");
                    newImagePreview.src = e.target.result;
                    document.getElementById("newImageContainer").style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
