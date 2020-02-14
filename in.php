<!DOCTYPE html>
<head>
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
      <h1 class="logoname"><a href="index.php">Gama<span>m</span>otor</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="index.php">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
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
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<!--  	<center><font size="6"></font>
 		<form method="post action=index.php">
		Filter
		<br>
		<select name="cmbcriteria" size="1">
			<option value="1" SELECTED>Kode</option>
			<option value="2">Jenis Barang</option>
			<option value="3">Tipe Mobil</option>
			<option value="4">Merek</option>
			<option value="5">Harga</option>
			<option value="6">Stok</option>
		</select> 
		<input type="text" name="txtnilai_kriteria">
		<input type="submit" name="cmdCari" id="cmdCari" value="Cari">
		<input type="reset" name="cmdBatal1" id="cmdBatal1" value="Batal"> 	
 		</form>
 		<br> -->


 		<!-- <table border="1" cellspacing="0" width="100%" bodercolor='black'>
 			<tr>
 				<td width="10">Kode</td>
 				<td width="20%">Jenis Barang</td>
 				<td width="20%">Tipe Mobil</td>
 				<td width="20%">Merek</td>
 				<td width="20%">Harga</td>
 				<td width="10%">Stok</td>
 			</tr>
 			<?php 
 			$conn=mysql_connect("localhost","root","") or die("Cannot connect to localhost");
 			$db=mysql_select_db("sparepart",$conn) or die("DB not exist");
 			if (isset($_POST["txtnilai_kriteria"]))
 			{
 				switch ($_POST["cmbkriteria"]) 
 				{
 					case '1':
 						$str="SELECT * FROM tb_data WHERE kode LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '2':
 						$str="SELECT * FROM tb_data WHERE jenis_barang LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '3':
 						$str="SELECT * FROM tb_data WHERE tipe_mobil LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '4':
 						$str="SELECT * FROM tb_data WHERE merek LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '5':
 						$str="SELECT * FROM tb_data WHERE lokasi LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '6':
 						$str="SELECT * FROM tb_data WHERE harga LIKE '%".$_POST["txtnilai_kriteria"]."%'";
 						break;
 					case '7':
 						$str="SELECT * FROM tb_data WHERE stok LIKE '%".$_POST["txtnilai_kriteria"];
 						break;
 					default:
 						break;
 				}
 			}
 			else 
 			{
 				$str="SELECT*FROM tb_data";
 			}
 			$rows=mysql_query($str);
 			while ($row=mysql_fetch_object($rows)) 
 			{
 				echo "<tr>
 					<td>".$row->kode."</td>
 					<td>".$row->jenis_barang."</td>
 					<td>".$row->tipe_mobil."</td>
 					<td>".$row->merek."</td>
 					<td>".$row->lokasi."</td>
 					<td>".$row->harga."</td>
 					<td>".$row->stok."</td>
 				</tr>";
 			}

 			?>
 		</table>
 		<br>
 	</center>-->
 	 		<form method=post action=simpan.php>
 			<table border=0 cellspacing="0">
 				<tr>
 					<td>Kode</td>
 					<td>Jenis Barang</td>
 					<td>Tipe Mobil</td>
 					<td>Merek</td>
 					<td>Lokasi</td>
 					<td>Harga</td>
 					<td>Stok</td>
 				</tr>
 				<tr>
 					<td><input type="text" name="txtkode" size="21" maxlength="50"></td>
 					<td><input type="text" name="txtjenis_barang" size="21" maxlength="50"></td>
 					<td><input type="text" name="txttipe_mobil" size="21" maxlength="50"></td>
 					<td><input type="text" name="txtmerek" size="21" maxlength="50"></td>
 					<td><input type="text" name="txtlokasi" size="15" maxlength="50"></td>
 					<td><input type="text" name="txtharga" size="26" maxlength="50"></td>
 					<td><input type="text" name="txtstok" size="6" maxlength="40"></td>
 				</tr>
 			</table>
 				
 				
	 			<font color="black">

	 			<input type="submit" name="cmdSimpan" id="cmdSimpan" value="Simpan">
	 			<input type="reset" name="cmdBatal2" id="cmdBatal2" value="Batal">
	 			</font>
	 			
 		</form>
 </body>
 </html>