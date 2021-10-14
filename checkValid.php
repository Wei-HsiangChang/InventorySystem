<?php
// start the session
    session_start();
    
    //check if the user is valid
    if (!isset($_SESSION['username']))
    {
        header('location:userLogin.php');
    }
