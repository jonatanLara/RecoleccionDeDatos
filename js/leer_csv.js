const x = document.querySelector("input");
x.addEventListener("change",()=>{
	//alert("");
	const fr = new FileReader();
	fr.onloadend = e =>{
		let r = fr.result.split("\n").map(e=>{
			return e.split(",");
		})
		r.forEach(e=>{
			let m = e.map(e=>{
				return `<td>${e}</td>`
			}).join("")

			const ce = document.createElement("tr");
			ce.innerHTML = m;
			if(ce.innerHTML !== ""){
				document.querySelector("table").append(ce);
			}
		});
	}
	fr.readAsText(x.files[0])
})

function darFormato(cadena){
	let aMayus = cadena.replace(/[AAAA]/g,'A');
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
