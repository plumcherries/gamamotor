<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "gamamotor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Some thing went wrong");

?>