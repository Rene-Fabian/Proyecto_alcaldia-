function postdatos() {
    let url = `https://192.168.1.68:8080/request`;
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
    data.tipo_solicitud = document.getElementById('tipo_solicitud').value;
    data.descripcion = document.getElementById('descripcion').value;

    
    //  data.nombre = "rene";

    let datos = JSON.stringify(data);
    const api = new XMLHttpRequest();
    api.open('POST', url, true);
    api.send(datos);


//     var url = 'http://192.168.1.68:8080/request';
//     var data = {username: 'ejemplo'};

// fetch(url, {
//   method: 'POST', // or 'PUT'
//   body: JSON.stringify(data), // data can be `string` or {object}!
//   headers:{
//     'Content-Type': 'application/json'
//   }
// }).then(res => res.json())
// .catch(error => console.error('Error:', error))
// .then(response => console.log('Success:', response));

}
