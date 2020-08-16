<?php
$con = mysqli_connect("localhost","root", "password","mydb");
if (!$con)
{echo "connection failed due to".mysqli_connect_error();}
$select = "select * from student";
$result = mysqli_query($con, $select);
// $results = $query->fetchAll(PDO::FETCH_ASSOC);

if (mysqli_num_rows($result) > 0)
{
    foreach($result as $row) {
        $id = $row['student_id'];
        $n = $row['name'];
        $k = $row['roll_no'];
        $gender=$row['gender'];
        echo "$id,' ',$n,' ',$k,' ',$gender";
     }
}
?>
