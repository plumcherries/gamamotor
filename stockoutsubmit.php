<?php 


require 'lib.php';

if (isset($_POST['stock_out'])) {
	
   	$stock_id = $_POST['stock_id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM stock WHERE stock_id= $stock_id");
    
    while ($hsl = mysqli_fetch_array($sql)) {

		if ($_POST['stock_out'] <= $hsl['stock_in']) {
    		$stock_out = $_POST['stock_out'];
			$stock_description = $_POST['stock_description'];
			$stock_out = $_POST['stock_out'];
			// $stock_status = $_POST['stock_status'];
			kurangStock($stock_id,$stock_description,$stock_out);
    	
    	} else {

    		echo "Stock tidak cukup";
    		header( "refresh:5; url=stockout.php" );

    	}

	}

} else {
	header('Location: stock.php');
	
}
 ?>
