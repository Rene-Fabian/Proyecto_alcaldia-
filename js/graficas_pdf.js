    function getPDFgraficos() {
    var doc = new jsPDF();
    var elementHTML = $('#content')[0];
    var specialElementHandlers = {
        '#elementH': function (element, renderer) {
            return true;
        }
    };
    doc.fromHTML(elementHTML, 15, 15, { 
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    
    // Save the PDF
    doc.save('Graficos.pdf')
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
 

