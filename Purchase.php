<!DOCTYPE html>
<html>
<head>
	<title>purchase Voucher</title>
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
  <a href="#">purchase</a>
  <a href="Purchase.php">Purchase</a>
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
<form action="screated.php" method="post" id="vc">
	<h1 align="center" style="color: MAROON;" > <?php echo $_SESSION['compname'];?></h1>
	<h3 align="center"><?php echo $_SESSION['comadd'];?></h3>
	<h3 align="center" id="gstin">GSTIN: <?php echo $_SESSION['comgstin'];?></h3>
<fieldset id="dashboard" " >
<legend align="center">purchase Voucher</legend>	
<fieldset id="dashboard" style="width:47.7%;float:right;">

	<legend>Voucher Details</legend>
	<label>Invoice No.</label> 
	<input name="invno" type="text" value="<?php $sql='SELECT max(invno) from purchase';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
    if($row["max(invno)"]){
    echo $row["max(invno)"]+1; 
   }
   else{echo '1';}
} else {
    echo("1");
}
	?>" readonly></input>
	<br><label >Date 	</label><input type="date"  style="width:auto;" value=<?php echo date("Y-m-d")?> name="invdate">
	<br><label> Voucher Type: 	</label><label id="vtype"></label>
</fieldset>
<fieldset id="dashboard"style="width:47.7%;float:left;" >
<legend align="center">Buyers Detail </legend>	
	<label>Buyer Name</label>
	<select style="width:80%" name="bname" id="bname" onchange="bnamefn();">
<?php $sql='SELECT * from account';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows >1) {
    while($row=$result->fetch_assoc())
    echo '<option data-gst="'.$row['GSTIN'].'" data-state="'.$row['state'].'" value="'.$row['accname'].'">'.$row['accname'].'</option>';

    } else {
    echo("1");
}
?>
</select>	<br>
	<label>Buyer's GSTIN: </label><input type="text" name="bgstin" id="bgstin" readonly>	<br>
	<label>Buyer's State:</label><input type="text" name="bstate" id="bstate" readonly></label><br>
</fieldset><p>		<br><br>
<fieldset id="dashboard"><legend >New Entry</legend>

	<span width=30%><label>Item Name</label></span><label>	</label>
	<br><select name="iname" id="iname" style="width:20%" onchange="inamefn();">
		<?php $sql='SELECT * from item';
	$result = $_SESSION['compdata']->query($sql);
	if ($result->num_rows >1) {
    while($row=$result->fetch_assoc())
    echo '<option data-gst="'.$row['gstrate'].'" data-hsn="'.$row['HSN'].'" value="'.$row['itemname'].'">'.$row['itemname'].'</option>';

    } else {
    echo("1");
}
?>
<script>
	function inamefn(){
		var option = document.getElementById('iname').options[document.getElementById('iname').selectedIndex];
		
		document.getElementById("hsn").value=option.getAttribute('data-hsn');
		document.getElementById("gstrate").value=option.getAttribute('data-gst')+"%";
		
	}</script>
	<input  name="hsn" style="width:7%" id="hsn" readonly><input name="gstrate" id="gstrate" style="width:7%" readonly><input name="qty" style="width:7%" id="qty" type="number" onchange="calc()""><input type="number"name="rate" id="rate" style="width:7%" onchange="calc()"><input name="amount" style="width:10%" id="amount" readonly><input name="igst" id="igst" style="width:7%" readonly><input name="cgst" id="cgst" style="width:7%" readonly><input name="sgst" id="sgst" style="width:7%" readonly><input name="namount" style="width:10%" id="namount" readonly><input style="width: 4%" type="button" value ="Add" onclick="addfn();">
</fieldset>
<fieldset id="Voucher"><legend align="center">Entries</legend>
</fieldset>
<input style="width:2%" type="text" name="number_of_rows" id="number_of_rows" readonly value="0">
<strong><span style=" width:auto;float:right;"> Total:<input style=" width:auto;float:right;"type="text" name="total" id='total' readonly value="0"></strong></span><br><input align=center type="submit" value="Continue" id="SUBMIT" align="center">	
</fieldset>

</div>
<script>
	function bnamefn(){
		var option = document.getElementById('bname').options[document.getElementById('bname').selectedIndex];
		
		document.getElementById("bstate").value=option.getAttribute('data-state');
		if(option.getAttribute('data-state')=='<?php echo $_SESSION['compstate']?>'){
		document.getElementById("vtype").textContent="INTRA-STATE";
		}
		else{
		document.getElementById("vtype").textContent="INTER-STATE";
			
		}
		// var option = document.getElementById('bname').options[document.getElementById('bname').selectedIndex];
		document.getElementById("bgstin").value=option.getAttribute('data-gst');
		
	}

	function calc(){
		var option = document.getElementById('rate');
		var qty = document.getElementById('qty');
		var grate=document.getElementById('gstrate');
		$r=option.value;
		$q=qty.value;
		$g=grate.value;
		$g=parseInt($g);
		document.getElementById("amount").value=$r*$q;
		if(document.getElementById("vtype").textContent=="INTRA-STATE"){
			document.getElementById("sgst").value=$r*$q*$g/200;
			document.getElementById("cgst").value=$r*$q*$g/200;
			document.getElementById("igst").value=0;
			document.getElementById("namount").value=($r*$q)+($r*$q*$g/100);
		}
		else if(document.getElementById("vtype").textContent=="INTER-STATE"){
			document.getElementById("igst").value=$r*$q*$g/100;
			document.getElementById("cgst").value=0;
			document.getElementById("sgst").value=0;
			document.getElementById("namount").value=($r*$q)+($r*$q*$g/100);
		}
		else{
			alert("invalid");
		}
	
	}
	var i=1;
	var tamount=0;
function addfn(){		
		itemname=document.createElement("input");
		itemname.style="width:20%";
		itemname.readOnly=true;
		itemname.name="iname"+i;
		itemname.value=document.getElementById('iname').options[document.getElementById('iname').selectedIndex].value;
		hsn=document.createElement("input");
		hsn.style="width:7%";
		hsn.readOnly=true;
		hsn.name="hsn"+i;
		hsn.value=document.getElementById('hsn').value;
		document.getElementById('hsn').value="";
		gstrate=document.createElement("input");
		gstrate.style="width:7%";
		gstrate.readOnly=true;
		gstrate.name="gstrate"+i;
		gstrate.value=document.getElementById('gstrate').value;
		document.getElementById('gstrate').value="";
		qty=document.createElement("input");
		qty.style="width:7%";
		qty.readOnly=true;
		qty.name="qty"+i;
		qty.value=document.getElementById('qty').value;
		document.getElementById('qty').value="";
		rate=document.createElement("input");
		rate.style="width:7%";
		rate.readOnly=true;
		rate.name="rate"+i;
		rate.value=document.getElementById('rate').value;
		document.getElementById('rate').value="";

		amount=document.createElement("input");
		amount.style="width:10%";
		amount.readOnly=true;
		amount.name="amount"+i;
		amount.value=document.getElementById('amount').value;
		document.getElementById('amount').value="";
		igst=document.createElement("input");
		igst.style="width:7%";
		igst.readOnly=true;
		igst.name="igst"+i;
		igst.value=document.getElementById('igst').value;
		document.getElementById('igst').value="";
		cgst=document.createElement("input");
		cgst.style="width:7%";
		cgst.readOnly=true;
		cgst.name= "cgst"+i;
		cgst.value=document.getElementById('cgst').value;
		document.getElementById('cgst').value="";
		sgst=document.createElement("input");
		sgst.style="width:7%";
		sgst.readOnly=true;
		sgst.name="sgst"+i;
		sgst.value=document.getElementById('sgst').value;
		document.getElementById('sgst').value="";


		namount=document.createElement("input");
		namount.style="width:10%";
		namount.readOnly=true;
		namount.name="namount"+i;
		namount.value=document.getElementById('namount').value;
		document.getElementById('namount').value="";
		// alert(tamount);

		document.getElementById('number_of_rows').value=i;
		tamount=tamount+parseFloat(namount.value);	
		document.getElementById('total').value=tamount;
		fs=document.getElementById('Voucher');
		fs.appendChild(itemname);
		fs.appendChild(hsn);
		fs.appendChild(gstrate);
		fs.appendChild(qty);
		fs.appendChild(rate);
		fs.appendChild(amount);
		fs.appendChild(igst);
		fs.appendChild(sgst);
		fs.appendChild(cgst);
		fs.appendChild(namount);
		i=i+1;
	}
</script>
</body>
</html>