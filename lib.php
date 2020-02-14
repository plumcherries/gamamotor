<?php 
require 'config.php';



function tampilkanStock(){
	global $koneksi;
	$sql = "SELECT * FROM stock";
	
	$hasil = $koneksi->query($sql);

	if($hasil->num_rows > 0) {
		return $hasil;
	} else {
		echo("Tidak Ada Data");
	}
}




// function tambahStock($stock_id,$stock_description,$stock_in) {
// 	global $koneksi;
// 	$sql2 = "SELECT stock_in FROM stock WHERE stock_id=$stock_id;";
// 	$stokLama = $koneksi->query($sql2)->fetch_assoc();
// 	$totalstockin = $stokLama['stock_in'];
// 	$stokqty = $stokLama['stock_quantity'];

// 	$sql = "INSERT INTO stock_in (stock_in_id,stock_id,stock_description,stock_in,date) VALUES (NULL,'$stock_id','$stock_description','$stock_in',CURRENT_TIMESTAMP)";
// 	$sql1 = "UPDATE stock SET stock_in = $totalstockin + $stock_in, stock_quantity = $stokqty + $stock_in WHERE stock_id=$stock_id";

// 	if ($koneksi->query($sql) === TRUE && ($koneksi->query($sql1))==TRUE) {
// 		header('Location: stockinconfirm.php');
// 	} else {
// 		echo "Error : " . $koneksi->error;
// 	}
// }

function tambahStock($stock_id,$stock_description,$stock_in) {
	global $koneksi;
	$sql2 = "SELECT stock_in FROM stock WHERE stock_id=$stock_id;";
	$stokLama = $koneksi->query($sql2)->fetch_assoc();
	$totalstockin = $stokLama['stock_in'];
	$stokqty = $stokLama['stock_quantity'];

	$sql = "INSERT INTO stock_in (stock_in_id,stock_id,stock_description,stock_in,date) VALUES (NULL,'$stock_id','$stock_description','$stock_in',CURRENT_TIMESTAMP)";
	$sql1 = "UPDATE stock SET stock_in = $totalstockin + $stock_in WHERE stock_id=$stock_id";

	if ($koneksi->query($sql) === TRUE && ($koneksi->query($sql1))==TRUE) {
		header('Location: stockinconfirm.php');
	} else {
		echo "Error : " . $koneksi->error;
	}
}

function kurangStock($stock_id,$stock_description,$stock_out) {
	// global $koneksi;
	// $sql = "INSERT INTO stock_out (stock_out_id,stock_id,stock_description,stock_out,stock_status,date) VALUES (NULL,'$stock_id','$stock_description','$stock_out','$stock_status',CURRENT_TIMESTAMP)";

	// if ($koneksi->query($sql) === TRUE) {
	// 	header('Location: stockoutconfirm.php');
	// } else {
	// 	echo "Error : " . $koneksi->error;
	// }
	


	global $koneksi;
	$sql3 = "SELECT stock_in FROM stock WHERE stock_id=$stock_id;";
	$sql2 = "SELECT stock_out FROM stock";
	$stokLama = $koneksi->query($sql2)->fetch_assoc();
	$totalstockout = $stokLama['stock_out'];
	$stokqty = $stokLama['stock_quantity'];

	$totalMsk = $koneksi->query($sql3)->fetch_assoc();
	$totalstockin = $totalMsk['stock_in'];
	$stock_quantity = $totalMsk['stock_quantity'];
	$sql = "INSERT INTO stock_out (stock_out_id,stock_id,stock_description,stock_out,date) VALUES (NULL,'$stock_id','$stock_description','$stock_out',CURRENT_TIMESTAMP)";
	$sql1 = "UPDATE stock SET stock_out = $totalstockout + $stock_out, stock_quantity = $totalstockin - $stock_out WHERE stock_id=$stock_id";

	// $sql2 = "SELECT stock_out FROM stock WHERE stock_id=$stock_id;";
	// $stokLama = $koneksi->query($sql2)->fetch_assoc();
	// $totalstockout = $stokLama['stock_out'];
	// $stokqty = $stokLama['stock_quantity'];

	// $sql = "INSERT INTO stock_out (stock_out_id,stock_id,stock_description,stock_out,date) VALUES (NULL,'$stock_id','$stock_description','$stock_out',CURRENT_TIMESTAMP)";
	// $sql1 = "UPDATE stock SET stock_out = $totalstockout + $stock_out, stock_quantity = $stokqty - $stock_out WHERE stock_id=$stock_id";
	// $sql3 = "INSERT INTO stock (stock_id,no,stock_code,product_type,brand,price,stock_location,stock_begining,stock_in,stock_out,stock_quantity) VALUES (NULL,'$stock_id','$no','$stock_code','$product_type','$brand','$price','$stock_location','$stock_beginning','$stock_in','$stock_out','$stock_quantity'='$stock_beginning'+'$stock_in'-$stock_out,CURRENT_TIMESTAMP)";
	if ($koneksi->query($sql) === TRUE && ($koneksi->query($sql1))==TRUE) {
		header('Location: stockoutconfirm.php');
	} else {
		echo "Error : " . $koneksi->error;
	}
	
}



 ?>