// document.querySelector('#enviar').addEventListener('click', function(){
// 	postdatos();
// });
function postdatos() {
    // let url = `https://192.168.1.68:8080/request`;
  
  
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
    var datajson = JSON.stringify(data);
    console.log(datajson);


}
