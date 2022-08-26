$('#submit-file').on("click",function(e){
	e.preventDefault();
	$('#fileUpload').parse({
		config: {
			delimiter: "auto",
			complete: displayHTMLTable,
		},
		before: function(file, inputElem)
		{
			//console.log("Parsing file...", file);
		},
		error: function(err, file)
		{
			//console.log("ERROR:", err, file);
		},
		complete: function()
		{
			//console.log("Done with all files");
		}
	});
});
  function displayHTMLTable(results) {
    var table = "<table class='table'>";
    var data = results.data;

    for (i = 0; i < data.length; i++) {
        table += "<tr>";
        var row = data[i];
        var cells = row.join(",").split(",");

        for (j = 0; j < cells.length; j++) {
            table += "< td > ";
            table += cells[j];
            table += "</th>";
        }
        table += "</tr>";
    }
    table += "</table>";

    $("#parsed_csv_list").html(table);
  }
// $.ajax({
//     url: 'T1_07043_0EG_20220617.csv',
//     dataType: 'text',
// }).done(successFunction);
//
// function successFunction(data) {
//   var allRows = data.split(/\r?\n|\r/);
//   var table = '<table border="1" class="table table-striped">';
//   for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
//     if (singleRow === 0) {
//       table += '<thead>';
//       table += '<tr>';
//     } else {
//       table += '<tr>';
//     }
//     var rowCells = allRows[singleRow].split(',');
//     for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {
//       if (singleRow === 0) {
//         table += '<th>';
//         table += rowCells[rowCell];
//         table += '</th>';
//       } else {
//         table += '<td>';
//         table += rowCells[rowCell];
//         table += '</td>';
//       }
//     }
//     if (singleRow === 0) {
//       table += '</tr>';
//       table += '</thead>';
//       table += '<tbody>';
//     } else {
//       table += '</tr>';
//     }
//   }
//   table += '</tbody>';
//   table += '</table>';
//   $('body').append(table);
// }
