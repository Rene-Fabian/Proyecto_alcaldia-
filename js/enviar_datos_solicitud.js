// document.querySelector('#enviar').addEventListener('click', function(){
// 	postdatos();
// });
function postdatos() {
    const url = 'http://localhost:2727/request';
    var data = {};
    data.nombre = document.getElementById('nombre').value;
    data.paterno = document.getElementById('paterno').value;
    data.materno = document.getElementById('materno').value;
    data.correo = document.getElementById('correo').value;
    data.telefono = document.getElementById('telefono').value;
    data.sexo = document.getElementById('sexo').value;
    data.calle = document.getElementById('calle').value;
    data.interior = document.getElementById('interior').value;
    data.exterior = document.getElementById('exterior').value;
    data.cp = document.getElementById('cp').value;
    data.colonia = document.getElementById('colonia').value;
    data.village = document.getElementById('poblado').value;
    data.tipo_solicitud = document.getElementById('tipo_solicitud').value;
    data.descripcion = document.getElementById('descripcion').value;
    // create request object
    const request = new Request(url, {
    method: 'POST',
    body: JSON.stringify(data),
    headers: new Headers({
        'Content-Type': 'application/json'
    })
});
// pass request object to `fetch()`
fetch(request)
    .then(res => res.json())
    .then(res => console.log(res));
}



