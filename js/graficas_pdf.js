function getPDFgraficos() {
   
    
    var canvas = document.getElementById("labelChart");
    var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
    var doc = new jsPDF('landscape');
    doc.setFontSize(20);
	doc.text(10, 10, "Cool Chart");
	doc.addImage(canvasImg, 'PNG', 10, 15, 280, 150);
	doc.save('canvas.pdf');

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


