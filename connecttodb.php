<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "lreid2assign2db";
$connection = mysqli_connecct($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    die("Database connection failed :") .
    mysql_connect_error() . " (" . mysql_connect_errno() . ")" ;
}
?>
