<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mikelim";
$dbname = "lreid2assign2db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    die("Database connection failed :") .
    mysql_connect_error() . " (" . mysql_connect_errno() . ")" ;
}
?>
