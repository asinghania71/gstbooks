<!DOCTYPE html>
<html>
<head>
	<title>GST Books-Create/Modify Items</title>
	<link rel="stylesheet" type="text/css" href="createitem.css">
</head>
<body><?php
session_start();
$s=0;
?>
	
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
  <a href="#" class='active'>Ledgers</a>
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
<h1 align="center" style="color: MAROON;" > <?php echo $_SESSION['compname'];?></h1>
	<h3 align="center"><?php echo $_SESSION['comadd'];?></h3>
	<h3 align="center" id="gstin">GSTIN: <?php echo $_SESSION['comgstin'];?></h3>
<fieldset class="dashblocks" id="a1" style="width: 47%">
	<legend>Create Item</legend>
	<form action='created.php' method="post">
	<label>Item Name</label><br>
			<input type="text" name="iname"><br><br>
			<label>GST Rate</label>
			<select name="gstrate">
				<option value="0">NIL</option>
				<option value="5">5%</option>
				<option value="12">12%</option>
				<option value="18">18%</option>
				<option value="28">28%</option>		
			</select> 
			<br><br>
			<label>HSN Code</label><br>
			<input type="number" name="HSN">
			<br><br>
			<input align=center type="submit" value="Continue" id="SUBMIT" align="center">
	</form>
</fieldset>	
<fieldset class="dashblocks" id="a1" style="width: 47%">
	<legend>Create Buyer/Seller</legend>
	<form action='created.php'method="post">
	<label>Account Name</label><br>
			<input type="text" name="aname"><br><br>
			<label>GSTIN</label><br>
			<input type="text" name="GSTIN"><br><br>
			<label>State</label>
			<select name="State">
				<option value="Karnataka"> Karnataka</option>
				<option value="others">Others</option>
			</select><br><br>
			<input align=center type="submit" value="Continue" id="SUBMIT" align="center">
	</form>
	
</fieldset>

</div>
</body>
</html>