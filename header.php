<?php
// start the session
    session_start();
?>    
<h1 align="center">Welcome to Music Store</h1>
<br>
<br>
<a href="index.php">Home</a> | 
<a href="insertItem.php">Increase Item</a> | 
<a href="viewList.php">Item List</a> |
<a href="userRegister.php">User Register</a> |
<?php
if (!isset($_SESSION['username']))
    echo "<a href='userLogin.php'>User Login</a>";  
else
    echo "<a href='userLogout.php'>User Logout</a>";
?>    




<hr style="height:2px;border-width:0;background-color:brown">