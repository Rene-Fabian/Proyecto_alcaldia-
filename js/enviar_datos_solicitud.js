function postdatos() {
    let url = `https://192.168.1.68:8080/alcaldiamp/statistics`;
    var data = {}
    data.nombre = document.getElementById('nombre').value;
    data.paterno = document.getElementById('paterno').value;
    data.materno = document.getElementById('materno').value;
    data.correo = document.getElementById('correo').value;
    data.telefono = document.getElementById('telefono').value;
    data.calle = document.getElementById('calle').value;
    data.interior = document.getElementById('interior').value;
    data.exterior = document.getElementById('exterior').value;
    data.cp = document.getElementById('cp').value;
    data.colonia = document.getElementById('colonia').value;
    data.pueblo = document.getElementById('pueblo').value;
    data.tipo_solicitud = document.getElementById('pueblo').value;
    data.descripcion = document.getElementById('descripcion').value;
    let datos = JSON.stringify(data);
    const api = new XMLHttpRequest();
    api.open('POST', url, true);
    api.send(datos);

}
