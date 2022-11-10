function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(position) {
    document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
    document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("Por seguridad, debes permitir el acceso a la ubicación para iniciar sesión.");
            break;
        default:
            break;
    }
}