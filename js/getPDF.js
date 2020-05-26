function getPDF(){
    var nombrepdf = document.getElementById('nombre').value;
    var paternopdf = document.getElementById('paterno').value;
    var maternopdf = document.getElementById('materno').value;
    var correopdf = document.getElementById('correo').value;
    var telefonopdf = document.getElementById('telefono').value;
    var sexopdf = document.getElementById('sexo').value;
    var callepdf = document.getElementById('calle').value;
    var interiorpdf = document.getElementById('interior').value;
    var exteriorpdf = document.getElementById('exterior').value;
    var cppdf = document.getElementById('cp').value;
    var coloniapdf = document.getElementById('colonia').value;
    var pueblopdf = document.getElementById('pueblo').value;
    var tipo_solicitudpdf = document.getElementById('tipo_solicitud').value;
    var descripcionpdf = document.getElementById('descripcion').value;
    var pdf = new jsPDF();


    pdf.text(20,25,"Comprobante de solicitud");
    pdf.text(20,35,"Folio Digital:");
    pdf.text(20,45,"    Datos personales:");
    pdf.text(20,55,"Nombre:" + nombrepdf + " " + paternopdf + " " + maternopdf);
    pdf.text(20,65,"Correo:"+ correopdf);
    pdf.text(20,75,"Teléfono:"+ telefonopdf);
    pdf.text(20,85,"Sexo:"+ sexopdf);
    pdf.text(20,95,"    Dirección");
    pdf.text(20,105,"Calle:"+ callepdf);
    pdf.text(20,115,"#Exterior:"+ interiorpdf);
    pdf.text(20,125,"#Interior:"+ exteriorpdf);
    pdf.text(20,135,"C.P.:"+ cppdf);
    pdf.text(20,145,"Colonia:"+ coloniapdf);
    pdf.text(20,155,"Pueblo:"+ pueblopdf);
    pdf.text(20,165,"   Datos de la solicitud");
    pdf.text(20,175,"Tipo de solicitud:" + tipo_solicitudpdf);
    pdf.text(20,185,"Descripción:" + descripcionpdf);

  

    pdf.save('Solicitud.pdf');
}
 

