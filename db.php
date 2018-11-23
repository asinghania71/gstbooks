<!DOCTYPE html>
<html>
<head>
	<title>GST Books-Create/Modify Items</title>
	<link rel="stylesheet" type="text/css" href="createitem.css">
</head>
<body>
	
<?php
session_start();
 
if(isset($_POST["email"])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}$sql='SELECT * from users  where username=\''.$_POST["email"].'\'';
// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
    $_SESSION['compname']=$row["company_name"];// output data of each row
    $_SESSION['db_name']=$row["db_name"];
    $_SESSION['comadd']=$row["com_add"]		;
    $_SESSION['comgstin']=$row["GSTIN"];
    $_SESSION['email']=$_POST["email"];
    $_SESSION['compstate']=$row["state"];
    if($row["password"]!=$_POST["Password"]){
    	die("Wrong Password");
    }
    
} else {
    die("0 results");
}

$_SESSION['compdata']=new mysqli($servername, $username, $password, "cmp".$_SESSION['db_name']);

if ($_SESSION['compdata']->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
}
// $conn->close();
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
<!-- <?php


// $conn->close();
?>
 -->
	<div id="divlogoright" style="font-size: 30px"><?php echo $_SESSION['compname']; ?><br>Welcome, <?php echo $_SESSION['email'];?><br>
	</div>	
	</div>
	<!-- The overlay -->

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="#" class="active">Dashboard</a>
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
<div class="main" id="n">

	<h1 align="center" style="color: MAROON;" > <?php echo $_SESSION['compname'];?></h1>
	<h3 align="center"><?php echo $_SESSION['comadd'];?></h3>
	<h3 align="center" id="gstin">GSTIN: <?php echo $_SESSION['comgstin'];?></h3>
	<h2 align="center">FY:2018-19</h2>
	<h3 align="left" id="gstin"> <span>Date:<?php
echo date("Y-m-d") ?></span><span style="float:right;"> Last Entry date :<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);

	$sql='SELECT max(date) from sales';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["max(date)"]!=NULL){
    echo $row["max(date)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></span></h3>
<fieldset id="dashboard">
<legend align="center">Dashboard</legend>	
<fieldset class="dashblocks" id="a1">
	<legend>Today</legend>
	<p> Net Sales:Rs.<?php
	 // echo date('y-m-d',strtotime("Yesterday"));	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);

	$sql='SELECT sum(namount) from sales  where date=\''.date('y-m-d').'\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
    if($row["sum(namount)"]){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>

	</p>
	<p>Net Purchase:<?php
	 // echo date('y-m-d',strtotime("Yesterday"));	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);

	$sql='SELECT sum(namount) from purchase  where date=\''.date('y-m-d').'\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
    if($row["sum(namount)"]){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>
</fieldset>	
<fieldset class="dashblocks" id="a1">
	<legend>Yesterday</legend>
	<p> Net Sales:Rs.<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);

	$sql='SELECT sum(namount) from sales  where date=\''.date('y-m-d',strtotime("Yesterday")).'\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?>	<p>Net Purchase:<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);

	$sql='SELECT sum(namount) from purchase  where date=\''.date('y-m-d',strtotime("Yesterday")).'\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>
</fieldset>
<fieldset class="dashblocks" id="a1">
	<legend>This Month</legend>
	<p> Net Sales:Rs.<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
	// echo date('y-m');
	$sql='SELECT sum(namount) from sales  where date like \'%'.date('y-m').'%\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>
	<p>Net Purchase:<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
	// echo date('y-m');
	$sql='SELECT sum(namount) from purchase  where date like \'%'.date('y-m').'%\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>
</fieldset>
<fieldset class="dashblocks" id="a1">
	<legend>This Year</legend>
	 <p>Net Sales:Rs.<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
	// echo date('y-m');
	$sql='SELECT sum(namount) from sales  where date like \'%'.date('y').'%\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?></p>
	<p>Net Purchase:<?php
	 // echo ;	
	$_SESSION['compdata']=new mysqli("localhost", "root", "", "cmp".$_SESSION['db_name']);
	// echo date('y-m');
	$sql='SELECT sum(namount) from purchase  where date like \'%'.date('y').'%\'';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
      if($row["sum(namount)"]!=NULL){
    echo $row["sum(namount)"]; 
   }
   else{echo '0.00';}
} else {
    echo("0");
}
	?>
</fieldset>
</fieldset>
</div>

</body>
</html>