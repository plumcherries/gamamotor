
<?php 
require 'lib.php';
// require_once('auth.php');

// include('db.php');


 ?>

<!DOCTYPE html>
<title>Gama Motor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="action.php">Gama<span>m</span>otor</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="">Home</a></li>
        <!-- <li><a href="stock.php">Inventory</a></li> -->
        <li><a class="drop" href="action.php">Menu</a>
          <ul>
            <li><a href="stockin.php">Stock In</a></li>
            <li><a href="stockout.php">Stock Out</a></li>
            <li><a href="inventorylist.php">Inventory List</a></li>
            <li><a href="card.php">Inventory Card</a></li>
            <!-- <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li> -->
          </ul>
        </li>
        <!-- <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li> -->
        
        <!-- <li><a href="#">Link Text</a></li> -->
        <li><a href="login.php">Logout</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<html>

<head>
	<title></title>
	<!-- <style type="text/css">
		h1 {
			color: white;
			background-color: grey;
			opacity: 0.7;

			text-align: center;
			padding: 10em;

		}
	</style> -->
</head>
<body>
	

	    			<h3>Stock Out</h3>
	    			<form action="stockoutsubmit.php" method="POST">
	    				
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
		    				<label>Stock Description</label>
		            		<input type="text" name="stock_description" class="form-control" placeholder="Description">
	            		</div>
		    			
		    			<div>
		    				<label>Stock Out Quantity</label>
		            		<input type="text" name="stock_out" class="form-control" placeholder="Quantity">
	            		</div>

	            		<!-- <div>
		    				<label>Stock Status</label>
		            		<select name="stock_status" id="stock_status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    
                            </select>
	            		</div> -->
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Stockout" name="stockout" class="">
		            </div>
	    				</div>
	    			</form>
	    		


</body> 
</html>