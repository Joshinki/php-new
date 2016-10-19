<?php
	include 'classes/invoice.php';
	$invoice = new Invoice;
?>

<div class="row">
	<div class="col-md-12">
		<h2>Main Details</h2>
		<table class="table table-bordered">
			<tr>
				<td class="text-right">Customer:</td>
				<td>
					<select name="customer">
						<option selected="selected" disabled="disabled">Select a customer</option>
						<option>Account 1</option>
						<option>Account 2</option>
					</select>
				</td>				
			</tr>
			
			<tr>
				<td class="text-right">Invoice Date:</td>
				<td>
					<input type="date" name="date" value="<?php echo date('d/m/Y');?>">
				</td>
			</tr>
			
			<tr>
				<td class="text-right">Comments:</td>
				<td>
					<textarea class="form-control" name="comments"></textarea>
				</td>
			</tr>
		</table>
		
		<h2>Items</h2>
		<table class="table table-bordered" id="invoiceTable">
			<thead>
				<th>Item</th>
				<th>Value each</th>
				<th>Qty</th>
			</thead>
			<tr>
				<td><input type="text" name="item1"></td>
				<td><input type="number" name="price1"></td>
				<td><input type="number" name="qty1"></td>
			</tr>
		</table>
	
		<input type="button" class="btn btn-success pull-right" value="Save Invoice">	
		<input type="button" class="btn btn-warning pull-right" value="Add More Items" onClick="addInput();" style="margin-right:5px;">
	</div>	
</div>