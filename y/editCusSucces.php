<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Customer SET CustomerId='$_GET[CustomerId]',CustomerName='$_GET[CustomerName]',CustomerLocation='$_GET[CustomerLocation]',Email='$_GET[Email]',DateOfBirth='$_GET[DateOfBirth]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]',Postcode='$_GET[Postcode]'
 WHERE CustomerId='$_GET[CustomerId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectCustomer.php'>กลับสู่หน้าหลัก</a>";
}
?>