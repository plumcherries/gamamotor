<?php
  require_once('auth.php');
?>
<?php
include('db.php');
?>

<!DOCTYPE html>

<html lang="">

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
        <li class="active"><a href="#">Home</a></li>
        <!-- <li><a href="stock.php">Inventory</a></li> -->
        <li><a class="drop" href="action.php">Menu</a>
          <ul>
            <li><a href="stockin.php">Stock In</a></li>
            <li><a href="stockout.php">Stock Out</a></li>
            <li><a href="stock.php">Inventory List</a></li>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/spare-part-asli.jpg'); height: 500px;">
  <div id="pageintro" class="hoc clear" style="padding-top: 150px;"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">Inventory System</h3>
      <p>Gama Motor</p>
      <footer style="margin-top: 20px;"><a class="btn" href="stock.php">Stock</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear" style="padding-bottom: 0px; height: 100px;"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="stockin.php"><i class="fas fa-cloud-download-alt"></i></a>
            <h6 class="heading">Inventory In</h6>
            <!-- <p>Ac orci proin porttitor lacus eget mi pellentesque non.</p> -->
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="stockout.php"><i class="fas fa-cloud-upload-alt"></i></a>
            <h6 class="heading">Inventory Out</h6>
           <!--  <p>Sapien sed metus congue sodales vivamus scelerisque.</p> -->
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="inventorylist.php"><i class="fas fa-file-alt"></i></a>
            <h6 class="heading">Inventory List</h6>
            <!-- <p>Et interdum vulputate purus nisl fringilla sapien quis.</p> -->
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="card.php"><i class="fas fa-file-archive"></i></a>
            <h6 class="heading">Inventory Card</h6>
            <!-- <p>Sollicitudin dui mauris dui nunc lorem tortor pharetra.</p>
          </article> -->
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
   
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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