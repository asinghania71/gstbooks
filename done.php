<!DOCTYPE html>
<html>
<head>
	<title>GST Books-Homepage</title>
	<link rel="stylesheet" type="text/css" href="fooder.css">
</head>
<body>

	<div id="divlogo">
	<img src="logo.png" height="88px">Books	
	</div>
	<?php
session_start();
$x=1;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}$sql='Select count(*) from users;';
$result = $conn->query($sql);
if ($result->num_rows ==1) {
    $row=$result->fetch_assoc();
    if($row["count(*)"]){
    $x= $row["count(*)"]+1;
}}
else{
	echo "Go Back";
}
$sql = 'INSERT INTO `users`(`username`, `password`, `company_name`, `state`, `com_add`, `GSTIN`, `db_name`) VALUES (\''.$_POST['email'].'\',\''.$_POST['Password'].'\',\''.$_POST['cname'].'\',\''.$_POST['comapnystate'].'\',\''.$_POST['Address'].'\',\''.$_POST['GSTIN'].'\',\''.$x.'\');';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "CREATE DATABASE cmp".$x;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn = new mysqli($servername, $username, $password, "cmp".$x);
$sql = "CREATE TABLE `account` (
 `accname` text NOT NULL,
 `GSTIN` text NOT NULL,
 `state` text NOT NULL
) ;CREATE TABLE `item` (
 `itemname` text NOT NULL,
 `gstrate` int(11) NOT NULL,
 `HSN` int(11) DEFAULT NULL
);CREATE TABLE `purchase` (
 `invno` double NOT NULL,
 `acname` text NOT NULL,
 `date` date NOT NULL,
 `gstin` text NOT NULL,
 `itemname` text NOT NULL,
 `HSN` int(11) NOT NULL,
 `gstrate` int(11) NOT NULL,
 `rate` decimal(20,2) NOT NULL,
 `qty` decimal(20,2) NOT NULL,
 `amount` decimal(20,2) NOT NULL,
 `cgst` decimal(20,2) NOT NULL,
 `sgst` decimal(20,2) NOT NULL,
 `igst` decimal(20,2) NOT NULL,
 `namount` double(20,2) NOT NULL
) ;CREATE TABLE `sales` (
 `invno` double NOT NULL,
 `acname` text NOT NULL,
 `date` date NOT NULL,
 `gstin` text NOT NULL,
 `itemname` text NOT NULL,
 `HSN` bigint(20) NOT NULL,
 `gstrate` int(11) NOT NULL,
 `rate` decimal(20,2) NOT NULL,
 `qty` decimal(20,2) NOT NULL,
 `amount` decimal(20,2) NOT NULL,
 `cgst` decimal(20,2) DEFAULT NULL,
 `sgst` decimal(20,2) DEFAULT NULL,
 `igst` decimal(20,2) DEFAULT NULL,
 `namount` decimal(20,2) NOT NULL
) ;";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
	<p>
		<img src="img.png" id="Tax"	 align=left height="480px">
	</p>
	<form action='done.php'  method="post">
			<fieldset><h2>New Company Created</h2>
			
		</form>
</body>
</html>