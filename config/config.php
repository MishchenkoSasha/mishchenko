<?php
$dblocation = 'localhost';
$dbuser = 'root';
$dbpassword = 'root';
$dbname = 'books';
$dbconnect = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);
if(!$dbconnect)
    exit('error connect db');




