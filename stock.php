<?php
//   require_once('auth.php');

// include('db.php');

require 'lib.php';


$stock = tampilkanStock();

// if (isset($_POST['invcard'])) {
// 	$stock_id = $_POST['stock_id'];
// 	$datebegin = $_POST['datebegin'];
// 	$dateend = $_POST['dateend'];

// 	$sql = "SELECT * FROM stock WHERE stock_id = $stock_id AND date BETWEEN '$datebegin 00:00:00' AND '$dateend 23:59:59' ORDER BY date ASC";
	
// 	$sql2 = "SELECT sum(stock_in) as totalstockinbefore, sum(stock_out) as totalstockoutbefore FROM stock_card WHERE stock_id = $stock_id AND date < '$datebegin 00:00:00' ORDER BY date";

// 	$sql3 = "SELECT sum(stock_in) as totalstockin, sum(stock_out) as totalstockout FROM stock_card WHERE stock_id = $stock_id AND date BETWEEN '$datebegin 00:00:00' AND '$dateend 23:59:59' ORDER BY date ASC";

// 	$sql4 = "SELECT * FROM stock WHERE stock_id = $stock_id";


// 	$card = $koneksi->query($sql);
// 	$card2 = $koneksi->query($sql2);
// 	$card3 = $koneksi->query($sql3);
// 	$card4 = $koneksi->query($sql4);



// 	$row2 = $card2->fetch_assoc();
// 	$row3 = $card3->fetch_assoc();
// 	$row4 = $card4->fetch_assoc();


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
      	<h3 class="heading"> Inventory System - Stock</h3>
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
      
    </div>

<html>
<head>
	<title></title>
</head>
<body>
  
	<!-- <h1 align="center">Gama Motor Inventory System</h1> -->
		<table border="1" id="myTable" align="center">
		<thead>
			<tr>
				<th>No.</th>
				<th>Date</th>
				<!-- <th>Stock Id</th> -->
				<!-- <th>Stock Code</th> -->
				<th>Product</th>
				<th>Brand</th>
				<!-- <th>Price</th> -->
				<th>Stock Location</th>
				<th>Quantity</th>
				<!-- <th>Stock Status</th> -->
			</tr>
		</thead>
		<tbody>
			<?php 
			$x = 1;
			
			while ( $row = $stock->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $x;?></td>
				<td><?php echo $row['date']?></td>
				
				<!-- <td><?php echo $row['no']; ?></td> -->
				<td><?php echo $row['product_type'];?></td>
				<td><?php echo $row['brand'];?></td>
				<!-- <td><?php echo $row['price'];?></td> -->
				<td><?php echo $row['stock_location'];?></td>
				<td><?php echo $row['stock_quantity']=$row['stock_in']-$row['stock_out'];?></td>
				<!-- <td><?php echo $row['stock_status'];?></td> -->
				<!-- <td>
					 <a href="edit-guest.php?id= <?php echo $row['id'];?>">Edit</a> --> 
					
					<!-- <a href="hapusguest.php?id= <?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data???')">Hapus</a></td> -->
			</tr>
			
			<?php
			$x++;
			}
			 ?>
			
		</tbody>
		
  </table>
  
    
    
</body>

</html>
