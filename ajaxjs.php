<?php

//Fetching Values from URL 
$fileToUpload2 = $_POST['fileToUpload1'];
$itemname2 = $_POST['itemname1'];
$itemprice2 = $_POST['itemprice1'];
$itemsize2 = $_POST['itemsize1'];
$pricepaid2 = $_POST['pricepaid1'];
$dateposted2 = $_POST['dateposted1'];
// Establishing connection with server..
$connection = mysqli_connect("localhost", "kgawarecki", "password");
// Selecting Database 
$db = mysqli_select_db($connection, "gawarecki_inc");
if (isset($_POST['itemname1'])) {
//Insert query 
    $query = mysqli_query($connection,"insert into add_item(fileToUpload, itemname, itemprice, itemsize, pricepaid, dateposted) values ('$fileToUpload2', '$itemname2', '$itemprice2', '$itemsize2', '$pricepaid2', '$dateposted2')");
    echo "Form Submitted succesfully";
}
//connection closed
mysqli_close($connection);
?>