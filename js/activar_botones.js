
function activarbotones() {
var campovalido = false;
// var campovalidopdf = false;
var botonenviar=document.getElementById('enviar');
// var botonpdf=document.getElementById('documentopdf');


if (campovalido == true) {
// if (campovalido == true && campovalidopdf==true) {
    botonenviar.disabled =true;

}
else {
    botonenviar.disabled =false;
    // botonpdf.disabled= false;

}
}




