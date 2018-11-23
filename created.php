<!DOCTYPE html>
<html>
<head>
	<title>GST Books-Create/Modify Items</title>
	<link rel="stylesheet" type="text/css" href="createitem.css">
</head>
<body><?php
session_start();?>
	
	<div id="header">
	<div id="divlogoleft" >
	<img src="logo.png" height="88px"><span>Books</span>

	<span onclick="openNav()"><div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></span>
	
	</div>

	<div id="divlogoright" style="font-size: 30px"><?php echo $_SESSION['compname']; ?><br>Welcome, <?php echo $_SESSION['email']; ?><br>
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
  <a href="report.php">Reports</a>
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
<?php
$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
	if(isset($_POST["aname"])){
	$sql="INSERT INTO `account` (`accname`, `GSTIN`, `state`) VALUES ('".$_POST['aname']."', '".$_POST['GSTIN']."', '".$_POST['State']."')";		
		// echo $sql;

	}
	else if(isset($_POST["iname"])){
	$sql="INSERT INTO `item` (`itemname`, `gstrate`, `HSN`) VALUES ('".$_POST['iname']."', '".$_POST['gstrate']."',".$_POST['HSN'].")";
	// echo $sql;
	}
	if (mysqli_query($_SESSION['compdata'], $sql)) {
    $a= "New record created successfully";
} else {
    $a= "Error: " . $sql . "<br>" . mysqli_error($_SESSION['compdata']);
}


?>
<div class="main" id="n">
<fieldset class="dashblocks" id="a1" style="width: 100%">
<p ALIGN="center"><?php echo $a;?>	
</fieldset>

</div>
</body>
</html>