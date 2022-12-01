function validar(){
    var pass1 = document.getElementsByName("pass").value;
    var pass2 = document.getElementsByName("pass2").value;

    if (pass1 != pass2) {
        alert("Las contraseñas no coinciden");
    }
}