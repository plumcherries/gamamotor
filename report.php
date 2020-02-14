<?php 
require 'lib.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body>
					<button><a href="stock.php">Stock</a></button>
					<button><a href="stockin.php">Stock In</a></button>
					<button><a href="stockout.php">Stock Out</a></button>

	    			<h3>Inventory Card</h3>
	    			<form action="inventorycard.php" method="POST">
	    				
	    				<div>
	    					<label>Stock</label>
	    					<select name="stock_id" id="stock_id" class="form-control" required>
                                    <option value="">- Select Stock -</option>
                                    <option value="1">Cup Kit</option>
                                    <option value="2">Dinamo Sapu Kaca</option>
                                    <option value="3">Gigi Roda Angin</option>
                                    
                            </select>
	    				</div>

	    				<div>
	    					<label>Date Begin</label>
	    					<input type="Date" name="datebegin" class="">
	    				</div>

	    				<div>
	    					<label>Date End</label>
	    					<input type="Date" name="dateend" class="">
	    				</div>
		    					
		    			
	    				
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Inventory Card" name="invcard" class="">
		            </div>
	    				</div>
	    			</form>
	    		


	    			<h3>Inventory List</h3>
	    			<form action="inventorylist.php" method="POST">
	    				
	    				

	    				<div>
	    					<label>Date Begin</label>
	    					<input type="Date" name="datebegin" class="">
	    				</div>

	    				<div>
	    					<label>Date End</label>
	    					<input type="Date" name="dateend" class="">
	    				</div>
		    					
		    			
	    				
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Inventory List" name="invlist" class="">
		            </div>
	    				</div>
	    			</form>

</body> 
</html>