	var rowCount = 2;
	
	function addInput() {
		var table = document.getElementById("invoiceTable");
		var row = table.insertRow(rowCount);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		
		cell1.innerHTML = '<input type="text" value="" name="item'+rowCount+'">';
		cell2.innerHTML = '<input type="number" value="" name="price'+rowCount+'">';
		cell3.innerHTML = '<input type="number" value="" name="qty'+rowCount+'">';
		rowCount++;
	}