<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="code for good team 56";


$conn=mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
if (!$conn) {
    die('connection failed'.mysqli_connect_error() );
}
?>
