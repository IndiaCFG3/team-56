<?php
session_start();
$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','','registration','3308');

//if the register button is clicked
if (isset($_POST['confirm'])) {

$uname=$_POST['uname'];
$rollno=$_POST['rollno'];
$gender=$_POST['gender'];
$qk=$_POST['qk'];

if (count($errors)==0) {
$sql = "INSERT INTO student(name,roll_no,gender,id) VALUES ('$uname','$rollno','$gender','$qk')";
mysqli_query($db,$sql);
}
}
?>
