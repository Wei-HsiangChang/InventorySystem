<?php
    ob_start();
    session_start();
    
    require_once 'connect.php';
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    
    $query = "Select * from tblUsers where username = '$username';";
    $rowUser= mysqli_query($conn,$query);
    if(mysqli_num_rows($rowUser) > 0)
    {
        $row= mysqli_fetch_assoc($rowUser);
        $hashed_password=$row['password'];
        
        if(password_verify($password, $hashed_password))
        {
            $_SESSION['username']=$username;
            header('location:viewList.php');
            ob_end_flush();
            die();
            
        }
        
    }
    header('location:userLogin.php?result=fail');
?>

