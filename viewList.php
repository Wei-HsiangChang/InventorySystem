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
        <title></title>
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

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
                border: 2px solid brown;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
                border: 2px solid brown;
            }

            tr:nth-child(even){background-color: lightgoldenrodyellow}

            th
            {
                background-color: darkorange;
                color: white;
            }

            h2
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
        <?php
                  
        require_once 'header.php';          
        ?>
        <h2>Hi, <?php echo $_SESSION['username']; ?></h2>
        <h2>View Products</h2>
        <?php
        require_once 'connect.php';
        $view="SELECT * FROM `MusicStore`";
        $rowView=mysqli_query($conn, $view);
        if($rowView > 0){
            echo "<table ><tr><th>ID</th><th>Item Name</th><th>Item Price</th></tr>";
            
            $i = 1;
            while($row=mysqli_fetch_assoc($rowView))
            {
                                             
                echo "<tr><td>$i</td>";
		echo "<td>" . $row['productName'] . "</td>";
		echo "<td>" . $row['priceTag'] . "</td></tr>";
		$i++;
             
            } 
            echo "</table>";
                            
        }
        else
            echo "Table is empty";
        ?>
        </div>
    </body>
</html>
