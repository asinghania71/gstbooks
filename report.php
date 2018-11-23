
<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="createitem.css">
</head>
<body>
	
	<div id="header">
	<div id="divlogoleft" >
	<img src="logo.png" height="88px"><span>Books</span>

	<span onclick="openNav()"><div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></span>
	
	</div>
<?php
session_start();
$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
$s=0;

?>

	<div id="divlogoright" style="font-size: 30px"><?php echo $_SESSION['compname']; ?><br>Welcome, <?php echo $_SESSION['email'];?><br>
	</div>	
	</div>
	<!-- The overlay -->

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="db.php" >Dashboard</a>
  <a href="sales.php">Sales</a>
  <a href="purchase.php">Purchase</a>
  <a href="#">Reports</a>
  <a href="ledger.php">Ledgers</a>
  <a href="help.php">Help</a>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->

  <script type="text/javascript">
  	function myFunction(x) {
    x.classList.toggle("change");

}
  	function openNav() {
  	t=document.getElementById("myNav");
  	// alert(t.style.width=="100%")
  	if(t.style.width=="20%"){	 		
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("n").style.width="99%";}
    else{
    document.getElementById("myNav").style.width = "20%";
	document.getElementById("n").style.width="79%";
	}
    	
    }
/* Close when someone clicks on the "x" symbol inside the overlay */
// function closeNav() {
//     document.getElementById("myNav").style.width = "0%";
// }
  </script>
</div>
<div class="main" id="n">

<fieldset class="dashblocks" id="a1" style="width: 100%;font-size: 30px" align="center" >
<a align=center href="sreport.php">Sales Report<br><br>
<a align=center href="preport.php">Purchase Report
</div>
</body>
</html>