<?php
ob_start();
require_once './connect.php';

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$hashed_password=password_hash($password, PASSWORD_DEFAULT);

$query="select username from tblUsers where username='$username'";
$rowRegister= mysqli_query($conn, $query);

if(mysqli_num_rows($rowRegister)>0)
{
    header('location:userRegister.php?result=userexists');
    ob_end_flush();
    die();
    
}  
else
{
    $query = "Insert into tblUsers (username, password) Values ('" . $username . "', '" . $hashed_password . "');";
    $rowRegister= mysqli_query($conn, $query);
    
    if($rowRegister==1)
    {
        header('location:userRegister.php?result=success');
        ob_end_flush();
        die();
    }
    else
    {
        header('location:userRegister.php?result=fail');
        ob_end_flush();
        die();
        
    }
}
?>

