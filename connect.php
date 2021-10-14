<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host='localhost';
$username='changwei_changwei';
$passwd='&dYcpy#ZJA5';
$dbname='changwei_mydatabase';

$conn=mysqli_connect($host, $username, $passwd, $dbname);

if(empty($conn))
{
    die("connection failed". mysqli_connect_error());

}

