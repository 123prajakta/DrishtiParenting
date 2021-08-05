<?php 
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database_name="drishtidb";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn) {
    die("Connection Failed".mysqli_connect_error());
}
?>