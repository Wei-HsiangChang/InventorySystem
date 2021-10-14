<?php
    // check if the user is valid, otherwise redirect back to login page
    require_once 'checkValid.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Increase New Item</title>
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

            table, td, th
            {    
                border: 2px solid brown;
                text-align: left;
                background-color: #ffcc66;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:50%;
                margin:auto;
            }
        </style>
    </head>
    
    <body>
    <div id="wrapper">

        <?php
                  
        require_once 'header.php';          
        ?>

        <h2>Add Item</h2>

        <form action="insertItem1.php" method="post">
            <table>
                <tr>
                    <td>Item Name:</td>
                    <td>
                        <input type="text" name="itemName">
                    </td>
                </tr>
                <tr>
                    <td>Price Tag:</td>
                    <td>
                        <input type="text" name="itemPrice">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add Item">
                    </td>
                </tr>
            </table>  
        </form>
        
        <?php
        if (isset($_REQUEST['result']))
        {
            if ($_REQUEST['result'] == "success")
            {
                echo "<br><div id='msg'>";
                echo "<div class='alert alert-success alert-dismissable fade in'>";
                echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Success!</strong> New item was created.";
                echo "</div></div>";
            }
            else
            {
                echo "<br><div id='msg'>";
                echo "<div class='alert alert-danger alert-dismissable fade in'>";
                echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Fail!</strong> New item was not created.";
                echo "</div></div>";
                
            }    
        }
        ?>
    </div>    
    </body>
</html>
