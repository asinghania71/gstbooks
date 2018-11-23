<!DOCTYPE html>
<html>
<head>
	<title>Print-Sales</title>
</head>
<body>
<?php
session_start();
$x=1;
//echo 'Invoice number'.$_GET['inv'];
$_SESSION['compdata']=new mysqli('localhost', "root", "", "cmp".$_SESSION['db_name']);
    // output data of each row

$sql="SELECT * FROM `sales` where invno=".$_GET['inv'];
$result = mysqli_query($_SESSION['compdata'], $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
$amount=0;
$cgst=0;
$sgst=0;
$igst=0;
$namount=0;

while($row = mysqli_fetch_assoc($result)) {
	$x=1;
echo '<page size="A4"><link  rel="stylesheet" type="text/css" href="print.css">';

echo '<div class="mySlides fade">';
// echo '<div class="numbertext">'.$x.' /10</div>';
echo '<table class="report" border=1 border-space=0 width=100%>';
echo '<tr><td colspan=11><H1 align="center" style="color: MAROON;" > '.$_SESSION['compname'].'</H1>
<H3 align="center" id="gstin">'. $_SESSION['comadd'].'</H3>
<H3 align="center" id="gstin">GSTIN:'. $_SESSION['comgstin'].'</H3>
<H2 align="center" id="gstin">GST Invoice</H2>
';
echo '<fieldset id="dashboard" style="width:45.7%;float:right;">
	<legend>Voucher Details</legend>
	<P>Invoice No. '.$row['invno'].'<br>
	Invoice Date. '.$row['date'].'</P>
</fieldset><fieldset id="dashboard" style="width:45.7%;float:LEFT;">
	<legend>Buyer Details</legend>
	<P>Buyer Name:- '.$row['acname'].'<br>Buyer GSTIN:- '.$row['gstin'].'</P>
</fieldset>';
$amount+=$row['amount'];
$cgst+=$row['cgst'];
$sgst+=$row['sgst'];
$igst+=$row['igst'];
$namount+=$row['namount'];
echo '<tr> <th>S No.</th><th>Item Name<th>HSN Code<th>GST Rate<th>Rate<th>Quantity<th>Amount<th>IGST<th>CGST<th>SGST<th>Net Amount';
echo '<tr> <td>'.$x.'<td>'.$row['itemname'].'<td>'.$row['HSN'].'<td>'.$row['gstrate'].'<td>'.$row['rate'].'<td>'.$row['qty'].'<td>'.$row['amount'].'<td>'.$row['cgst'].'<td>'.$row['sgst'].'<td>'.$row['igst'].'<td>'.$row['namount'];
while($x<25){
$x=$x+1;      
$row=mysqli_fetch_assoc($result);
echo '<tr> <td>'.$x.'<td>'.$row['itemname'].'<td>'.$row['HSN'].'<td>'.$row['gstrate'].'<td>'.$row['rate'].'<td>'.$row['qty'].'<td>'.$row['amount'].'<td>'.$row['cgst'].'<td>'.$row['sgst'].'<td>'.$row['igst'].'<td>'.$row['namount'];
$amount+=$row['amount'];
$cgst+=$row['cgst'];
$sgst+=$row['sgst'];
$igst+=$row['igst'];
$namount+=$row['namount'];
}

echo '<tr> <th colspan=6 align=right>Total:<th>'.$amount.'<th>'.$cgst.'<th>'.$sgst.'<th>'.$igst.'<th>'.$namount;
echo '<tr><td colspan=11><fieldset id="dashboard" style="width:45.7%;float:right;">
	<legend align=right>For '.$_SESSION['compname'].'</legend><br><br><br><p align=right>Authorised Signatory</p>
</fieldset><fieldset id="dashboard" style="width:45.7%;float:LEFT;">
	<legend>Declaration</legend>
	<P>We declare that this Invoice shows the actual price of the goods described and all the particulars are true and correct.
	<br><br><p></p>
</fieldset>';
//echo '<tr><p align=center>THIS IS COMPUTER GENERATED BILL</div>';
echo'</table>';
echo '</page>';
}}
?>


</body>
</html>