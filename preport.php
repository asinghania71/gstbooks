
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
<h3 align="center">Purchase REPORT</h3>
<!-- Slideshow container -->
<div class="slideshow-container">
<?php
$x=1;
$_SESSION['compdata']=new mysqli('localhost', "root", "", "cmp".$_SESSION['db_name']);
    // output data of each row

$sql="SELECT invno,`acname`,`date`,`gstin`,sum(`Amount`),sum(`cgst`),sum(`sgst`),sum(`igst`),sum(`namount`) FROM `purchase` GROUP by invno";
$result = mysqli_query($_SESSION['compdata'], $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
	$x=1;
echo '<div class="mySlides fade">';
echo '<div class="numbertext">'.$x.' /10</div>';
echo '<table class="report" border="2px" width=100%>';
echo '<tr><td colspan=9><H2 align="center" style="color: MAROON;" > '.$_SESSION['compname'].'</H2>
<H3 align="center" id="gstin">GSTIN: '. $_SESSION['comgstin'].'</H3>
	<p align="center">FY:2018-19</p>
		<h3 align="left" id="gstin"> <span>Date:'.date("Y-m-d").'</span><span style="float:right;"></h3>
';
echo '<tr> <th>Invoice No.</th><th>Date<th>Buyer<th>GSTIN<th>Bill Amount<th>IGST<th>CGST<th>SGST<th>Net Amount';
echo '<tr> <td>'.$row['invno'].'</th><th>'.$row['date'].'<th><a href="pprint.php?inv='.$row['invno'].'">'.$row['acname'].'</a><th>'.$row['gstin'].'<th>'.$row['sum(`Amount`)'].'<th>'.$row['sum(`cgst`)'].'<th>'.$row['sum(`sgst`)'].'<th>'.$row['sum(`igst`)'].'<th>'.$row['sum(`namount`)'];
while($x<10 && $row=mysqli_fetch_assoc($result)){
      echo '<tr> <td>'.$row['invno'].'</th><th>'.$row['date'].'<th><a href="pprint.php?inv='.$row['invno'].'">'.$row['acname'].'</a><th>'.$row['gstin'].'<th>'.$row['sum(`Amount`)'].'<th>'.$row['sum(`cgst`)'].'<th>'.$row['sum(`sgst`)'].'<th>'.$row['sum(`igst`)'].'<th>'.$row['sum(`namount`)'];
// echo $x;
$x=$x+1;}
echo'</table>';
echo '<div class="text"></div></div>';
}}
?>
  <!-- Full-width images with number and caption text -->

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

</div>
</body>
</html>