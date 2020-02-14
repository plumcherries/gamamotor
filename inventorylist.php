<?php


require 'lib.php';
//require 'config.php';

$stock = tampilkanStock();


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
</head>
<body>

	<h1 align="center">Gama Motor Inventory System</h1>
		<table border="1" id="myTable" align="center">
		<thead>
			<tr>
				<!-- <th>No.</th> -->
				<th>Date</th>
				<!-- <th>Stock Id</th> -->
				<th>Stock Code</th>
				<th>Product</th>
				<th>Brand</th>
				<!-- <th>Price</th> -->
				<th>Stock Location</th>
				<!-- <th>Stock Beginning</th>
 -->				<th>Stock In</th>
				<th>Stock Out</th>
				<th>Stock Balance</th>
				<!-- <th>Stock Status</th> -->
			</tr>
		</thead>
		<tbody>
			<?php 
			$x = 1;

			$stockBalance = 0;
			while ( $row = $stock->fetch_assoc()) {
				$stockBalance = $stockBalance + $row['stock_in'] - $row['stock_out'];
			?>
			<tr>
				<!-- <td><?php echo $x;?></td> -->
				<td><?php echo $row['date']?></td>
				<td><?php echo $row['no'];?></td>
				<!-- <th><?php echo $row['stock_code']?></th> -->
				<td><?php echo $row['product_type'];?></td>
				<td><?php echo $row['brand'];?></td>
				<!-- <td><?php echo $row['price'];?></td> -->
				<td><?php echo $row['stock_location'];?></td>
				<!-- <td><?php echo $row['stock_beginning'];?></td> -->
				<td><?php echo $row['stock_in'];?></td>
				<td><?php echo $row['stock_out'];?></td>
				<td><?php echo $row['stock_beginning']+$row['stock_in']-$row['stock_out']; ?></td>
				<!-- <td><?php echo $row['stock_status'];?></td> -->
				<!-- <td>
					<a href="edit-guest.php?id= <?php echo $row['id'];?>">Edit</a> 
					
					<a href="hapusguest.php?id= <?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data???')">Hapus</a></td> -->
			</tr>
			
			<?php
			$x++;
			}
			 ?>
			
		</tbody>
		
	</table>
	<div align="center" style="padding-top: 50px">
	<button><a href="stockin.php">Stock In</a></button>
	<button><a href="stockout.php">Stock Out</a></button>
	</div>

</body>
</html>