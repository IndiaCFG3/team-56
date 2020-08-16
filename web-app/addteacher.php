<!DOCTYPE html>
<html>
<head>
<style>
  body {
            background-image: url("pic2.jpg");
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            height: 100%;
            width: 100%;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
          }
form {
      text-align: center;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 45%;
      height: 50%;
    }

input[type=text]{
  width: 40%;
  padding: 12px 20px;
  margin: 20px;
  margin-top: 90px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }

  input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 20px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
h1{
  text-align: center;

}

button {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 30px;
  border: none;
  cursor: pointer;
  width: 45%;
}

button:hover {
  opacity: 0.8;
}

.container {
  background-color: white;
  padding: 0px;
  text-align: center;
  height: 400px;
}
p{
  color: silver;
  font-size: 14px;
}
img{
  cursor: pointer;
}



</style>
</head>
<body>
  <img onclick="goBack()" height="50px" width="50px" src="back.png">

  <script>
function goBack() {
  window.history.back();
}
</script>
<?php
$con = mysqli_connect("localhost","root", "password","mydb");
if (!$con)
{echo "connection failed due to".mysqli_connect_error();}
$sid = $_POST["sid"];
$class = $_POST["class"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$num = $_POST["num"];
$date = $_POST["date"];
$query="INSERT INTO standard (`standard_id`, `class`,`email`,`password`,`no_of_students`,`date`), VALUES('$sid','$class','$email','$pwd','$num','$date')";
// $result = mysqli_query($con, $select);
mysqli_query($con,$query);
?>

<h1>ADD TEACHER</h1>
<form action="addteacher.php" method="post">

  <div class="container">


    <label for="sid"><b>Standard ID</b></label>
    <input type="text" placeholder="Enter standard ID" name="sid" required>
    <label for="class"><b>Class Name</b></label>
    <input type="text" placeholder="Enter Class Name" name="class" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <label for="num"><b>Number of Students</b></label>
    <input type="text" placeholder="Enter number of students" name="num" required>
    <label for="date"><b>Enter Date</b></label>
    <input type="date" placeholder="Enter Date" name="date" required>
    <br>
    <button name="login" type="submit">Login</button>
    <br>
    <!-- <p>Not a member? <a href="tsignup.php">Sign up now</a> </p> -->
 
  </div>

</form>

</body>
</html>
