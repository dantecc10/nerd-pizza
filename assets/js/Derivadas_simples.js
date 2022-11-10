function descomponerstring() {
    let arr = mensaje.split(' ');

    // El arreglo
    console.log(arr); // ["Soy", "un", "tipo", "feliz", "y", "afortunado"]


    // Acceso a cada elemento del arreglo resultante
    console.log(arr[0]); // "Soy"
    console.log(arr[1]); // "un"
    console.log(arr[2]); // "tipo"
    console.log(arr[3]); // "feliz"
    console.log(arr[4]); // "y",
    console.log(arr[5]); // "afortunado"

}

var nums = "1234567890";
var abc = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnÑñOoPpQqRrSsTtUuVvWwXxYyZz"
function esnumero(texto) {
    for (let i = 0; i < texto.length; i++) {
        if (nums.indexOf(texto.charAt(i), 0) != -1) {
            return 1;
        }
        return 0;
    }
}
alert(esnumero("sfafds4gfh7"));