// function getPDFtablas() {
//     var pdf = new jsPDF('p','pt','letter');
//         source = $('#caja')[0];
//             specialElementHandlers = {
//                 '#bypassme': function (element, renderer) {
//                     return true

//         }
//     };

//     margin = {top:80, 
//                 bottom:60,
//                     left:40,
//                         width:522
//                             };
//     pdf.fromHTML(
//         source,
//             margins.left,
//                 margins.top, {
//                     'width':margins.width,
//                         'elementHandlers': specialElementHandlers
//                 },margins);
//                 // function (dispose){
//                 //     pdf.save('test.pdf');
//                 // },margins);

//     pdf.save('test.pdf');
// }





function getPDFtablas() {
    var doc = new jsPDF('p', 'pt', 'letter');
    var elementHTML = $('#content')[0];
    var specialElementHandlers = {
        '#elementH': function (element, renderer) {
            return true;
        }
    };
    doc.setFontSize(24);
    doc.setFont("courier");
    doc.setFontType("italic");
    doc.fromHTML(elementHTML, 20, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });

    // Save the PDF
    doc.save('Registros.pdf')
}
