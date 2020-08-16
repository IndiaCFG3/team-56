<?php
$con = mysqli_connect("localhost","root", "password","mydb");
if (!$con)
{echo "connection failed due to".mysqli_connect_error();}
$select = "select * from standard";
$result = mysqli_query($con, $select);
// $results = $query->fetchAll(PDO::FETCH_ASSOC);

if (mysqli_num_rows($result) > 0)
{
    foreach($result as $row) {
        $id = $row['standard_id'];
        $n = $row['class'];
        $k = $row['no_of_students'];
        echo "$id,' ',$n,' ',$k";
     }
}
?>