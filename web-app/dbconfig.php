<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="team56";


$conn=mysqli_connect($servername,$dbuser,$dbpassword,$dbname);
if (!$conn) {
    die('connection failed'.mysqli_connect_error() );
}
?>
