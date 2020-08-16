<?php include('studentdetailsserver.php'); ?>

<?php
// Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<style>
body {
            background-image: url("det1.jpg");
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            height: 100%;
            width: 100%;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;}

form {
     
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 45%;
      height: 50%;
      border:none;
    }


h1{
  text-align: center;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 12px 0px 22px 22px;
  display: inline-block;
  border: none;
  border: 1px solid #ccc;
  box-sizing: border-box;

}

label{
 margin-top: 12px;
 margin-left: 22px;
}



button {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 30px;
  border: none;
  cursor: pointer;
  width: 70%;
}

button:hover {
  opacity: 0.8;
}

.submit{
  text-align: center;
  margin-left: auto;
      margin-right: auto;
      width: 70%;
}

.container {
  padding: 16px;
  background: white;
  border:none;
}

p{
  text-align: center;
  color: silver;
  font-size: 14px;
}

.error{
  width:40%;
  margin:0px auto;
  padding: 5px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius:5px;
  text-align: center;
}

.error1{
  color: #a94442;
}

.success{
  text-align: middle;
  font-weight: 3px;
  background: #b3ffb3;
  border-radius: 5px;
  color: #00b300;
  font-size: 20px;
  padding: 10px;
}

</style>
<body>

<h1>ADD A STUDENT</h1>

<form action="studentserverdetails.php" method="post">

  <div class="container">
    <label for="username"><b>Name</b></label><br>
    <input type="text" placeholder="Name" name="uname" required>
    <br>
    <label for="rollno"><b>Roll_no</b></label><br>
    <input type="text" placeholder="Gender" name="rollno" required>
    <br>
    <label for="gender"><b>Gender</b></label><br>
    <input type="text" placeholder="Gender" name="gender" required>
    <br>
     <label for="id"><b>ID</b></label><br>
    <input type="text" placeholder="ID" name="qk" required>
    <br>
    <button name="confirm" type="submit">confirm</button>
    
</form>

</body>
</html>
