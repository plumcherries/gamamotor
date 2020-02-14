<?php 


require 'lib.php';

if (isset($_POST['stockin'])) {
	$stock_id = $_POST['stock_id'];
	$stock_description = $_POST['stock_description'];
	$stock_in = $_POST['stock_in'];
	tambahStock($stock_id,$stock_description,$stock_in);
	
} else {
	header('Location: index.php');
}
 ?>
