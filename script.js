window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

      //setting for condition that only numeric values are allowed

    function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}

///script for the print value
function PrintTable() {
    var printWindow = window.open('', '', 'height=600,width=900');
    printWindow.document.write('<html><head><title>REPORT</title>');

    //Print the Table CSS.
    var table_style = document.getElementById("table_style").innerHTML;
    printWindow.document.write('<style type = "text/css">');
    printWindow.document.write(table_style);
    printWindow.document.write('</style>');
    printWindow.document.write('</head>');

    //Print the DIV contents i.e. the HTML Table.
    printWindow.document.write('<body>');
    var divContents = document.getElementById("dvContents").innerHTML;
    printWindow.document.write(divContents);
    printWindow.document.write('</body>');

    printWindow.document.write('</html>');
    printWindow.document.close();
    printWindow.print();
}


///script for the total amount calculation 
var tds = document.getElementById('countit').getElementsByTagName('td');
var sum = 0;
for (var i = 0; i < tds.length; i ++) {
    if(tds[i].className == 'count-me') {
        sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
    }
}
document.getElementById('countit').innerHTML += '<tr  rowspan="2"><td colspan="7" style="font-weight:bold;">TOTAL AMOUNT IN THE SELECTED DURATION</td><td>'
     + sum + '</td></tr>';

