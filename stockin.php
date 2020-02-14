<?php 
// require 'lib.php';
require_once('auth.php');

include('db.php');

 ?>

<!DOCTYPE html>
<html>
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
        <li class="active"><a href="action.php">Home</a></li>
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

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/spare-part-asli.jpg');">

  <div id="breadcrumb" class="hoc clear" style="padding-top: 120px;"> 
    <!-- ################################################################################################ -->
    <article>
      <center>
      	<h3 class="heading">Inventory System</h3>
      	<p>Gama Motor</p>
      	<br>
      	<!-- <footer><a class="btn" href="action.php">Home</a></footer> -->
      	<br>
      </center>
    </article>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Lorem ipsum dolor</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>
    </div>

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
	

	    			<h3 style="padding-left: 300px;">Stock In</h3>
	    			<form action="stockinsubmit.php" method="POST" style="padding-left: 300px;">
	    				
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
		    				<label>Stock In Quantity</label>
		            		<input type="text" name="stock_in" class="form-control" placeholder="Quantity">
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
                  <br>
		              <input type="submit" value="Stock In" name="stockin" class="">
		            </div>
	    				</div>
	    			</form>
	    		
  <div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Gama Motor</a></p>
    <!-- <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->

</body> 
</html>