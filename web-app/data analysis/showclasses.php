<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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
        ?>
       <a href="getvalues.php?id='<?php $row ?>'"></a>
        <?php
     }
}
?>

</body>
</html>