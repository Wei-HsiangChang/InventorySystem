<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
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
                width:40%;
                margin:auto;
            }
        </style>    
    </head>
    <body>
        <div id="wrapper">

            <?php
                  
            require_once 'header.php';          
            ?>

            <h2>Login</h2>

            <form action="userLogin1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>

             <?php
                // to display the message back to the user
                if (isset($_REQUEST['result']))
                {
                    if ($_REQUEST['result'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Login failed!</strong> Either username or password is incorrect. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
        </div>
    </body>
</html>
