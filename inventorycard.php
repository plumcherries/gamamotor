require_once('auth.php')
<?php 


require 'config.php';

if (isset($_POST['invcard'])) {
	$stock_id = $_POST['stock_id'];
	// $product_type = $_POST['product_type'];
	$datebegin = $_POST['datebegin'];
	$dateend = $_POST['dateend'];

	
	$sql = "SELECT * FROM stock_card WHERE stock_id = $stock_id AND date BETWEEN '$datebegin 00:00:00' AND '$dateend 23:59:59' ORDER BY date ASC";
	
	$sql2 = "SELECT sum(stock_in) as totalstockinbefore, sum(stock_out) as totalstockoutbefore FROM stock_card WHERE stock_id = $stock_id AND date < '$datebegin 00:00:00' ORDER BY date";

	$sql3 = "SELECT sum(stock_in) as totalstockin, sum(stock_out) as totalstockout FROM stock_card WHERE stock_id = $stock_id AND date BETWEEN '$datebegin 00:00:00' AND '$dateend 23:59:59' ORDER BY date ASC";

	$sql4 = "SELECT * FROM stock WHERE stock_id = $stock_id";
	// $sql5 = "SELECT * FROM category WHERE product_type = $product_type";

	$card = $koneksi->query($sql);
	$card2 = $koneksi->query($sql2);
	$card3 = $koneksi->query($sql3);
	$card4 = $koneksi->query($sql4);
	// $card5 = $koneksi->query($sql5);



	$row2 = $card2->fetch_assoc();
	$row3 = $card3->fetch_assoc();
	$row4 = $card4->fetch_assoc();
	// $row5 = $card5->fetch_assoc();

	

	$beginning = 0 + $row2['totalstockinbefore'] - $row2['totalstockoutbefore'];
	$totalstockin = $beginning + $row3['totalstockin'];
	$totalstockout = $row3['totalstockout'];

	// $ending = $totalstockin - $totalstockout;
	// echo $ending;
	

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

	<h1 align="center">Inventory Card</h1>
		
		
			<div align="center">
				<label ><b>Product ID</b></label><p><?php echo $row4['stock_id']; ?></p>
				<label><b>Product Name</b></label><p><?php echo $row4['product_type']; ?></p>				
				<!-- <label><b>Product Name</b></label><p><?php echo $row4['stock_code']; ?></p> -->
				<label><b>Inventory Date</b></label><p><?php echo $datebegin; ?> until <?php echo $dateend; ?></p>
				
		
		
			</div>

		<table border="1" id="myTable" align="center">
		<thead>
			<tr>
				<th>Date</th>
				<!-- <th>Code Stock</th> -->
				<!-- <th>Product</th>
				<th>Product Type</th> -->
				<!-- <th>Brand</th> -->
				<th>Description</th>
				<!-- <th>Price</th> -->
				<!-- <th>Stock Location</th> -->
				<!-- <th>Beginning</th> -->
				<th>Stock In</th>
				<th>Stock Out</th>
				<th>Stock Balance</th>
			</tr>
		</thead>
		<tbody>
			
			
			<?php 
			
			
			while ( $row = $card->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $row['date'];?></td>

				<!-- <td><?php echo $row['stock_id'];?></td> -->
				<!-- <td><?php echo $row['category_id'];?></td>
				<td><?php echo $row['product_type'];?></td>
				<td><?php echo $row['brand'];?></td> -->

				<td><?php echo $row['stock_description'];?></td>
				<td><?php echo $row['stock_in'];?></td>
				<td><?php echo $row['stock_out'];?></td>

				<!-- <td><?php echo $row['stock_balance']=$totalstockin-$row['stock_out'];?></td> -->
				<!-- <td><?php echo $row['stock_balance']=$row['stock_beginning']+$row['stock_in']-$row['stock_out'];?></td> -->
				
				<td><?php echo $row['stock_balance']=$row3['totalstockin']-$row['stock_out'];?></td>
				<!-- <td>
					<a href="edit-guest.php?id= <?php echo $row['id'];?>">Edit</a> 
					
					<a href="hapusguest.php?id= <?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data???')">Hapus</a>
				</td> -->
			</tr>



			


			<?php 
			} ?>

			
			<tr>
				<td></td>
				<td>Total</td>
				<td><?php echo $totalstockin; ?></td>
				<td><?php echo $totalstockout; ?></td>
			</tr>


			
		</tbody>
		
	</table>







	
<?php 			 
			
} else {
	header('Location: stock.php');
}

 ?>


