<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title >Music Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <style>
            body
            {
                background-color:moccasin;
                
            }
           
            
            #wrapper
            {
                width:80%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <?php
            require_once 'header.php';
            ?>

            <h2>Display New Items</h2>

            <p>Register first, and log in to add new items!</p>

        </div>
    </body>
</html>
