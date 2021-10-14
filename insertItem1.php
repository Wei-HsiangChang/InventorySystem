<?php
ob_start();

require_once 'connect.php';
$itemName = $_REQUEST['itemName'];
$itemPrice = $_REQUEST['itemPrice'];

$insert = "INSERT INTO `MusicStore`(`productName`, `priceTag`) VALUES ('$itemName','$itemPrice')";

$rowInsert = mysqli_query($conn, $insert);
if ($rowInsert == 1) {
    //redirect back to insertItem.php and show the success message
    header("location:insertItem.php?result=success");
    ob_end_flush();
    die();
} 
else {
    //redirect back to insertItem.php and show failure message
    header("location:insertItem.php?result=fail");
    ob_end_flush();
    die();
}
?>




