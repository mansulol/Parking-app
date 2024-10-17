function getLocation() {
    let ubicationInput = document.getElementById("ubication");
    ubicationInput.value = "Getting your ubication...";

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;
                ubicationInput.value = `${latitude}, ${longitude}`;
            },
            function (error) {
                console.log("Error getting your location:", error.message);
                alert("Cant your location.");
            }
        );
    } else {
        alert("No location");
    }
}

function previewNewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const newImagePreview = document.getElementById("newImagePreview");
            newImagePreview.src = e.target.result;
            document.getElementById("newImageContainer").style.display =
                "block";
        };
        reader.readAsDataURL(file);
    }
}
