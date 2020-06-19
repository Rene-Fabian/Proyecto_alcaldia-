function getPDFgraficos() {


  
  var canvasdos = document.getElementById("barChart");
  var canvas = document.getElementById("labelChart");
  var canvasImgdos = canvasdos.toDataURL("image/jpeg", 1.0);
  var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
  var doc = new jsPDF('landscape');
  doc.setFontSize(20);
  doc.text(10, 10, "Cool Chart");
  doc.addImage(canvasImg, 'PNG', 10, 15, 280, 150);

  // agregar una nueva página
  doc.addPage();
  doc.setFontSize(20);
  doc.text(10, 10, "Cool Chart");
  doc.addImage(canvasImgdos, 'PNG', 10, 15, 280, 150);
  // nombre del documento descargado 
  doc.save('reporte.pdf');
}

// function getPDF(){

//     var doc = new jsPDF({
//         orientation: 'landscape'
//     });

//     doc.text(20, 20, 'Hola mundo');
//     doc.text(20, 30, 'Vamos a generar un pdf desde el lado del cliente.');

//     // Add new page
//     doc.addPage();
//     doc.text(20, 20, 'Visita programacion.net');

//     // Save the PDF
//     doc.save('documento.pdf');


// }


