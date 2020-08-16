<?php
  $id=$_GET['id'];
$stud = "select * from student where studentid=$id";
$student = mysqli_query($con, $stud); 
$ques = "select * from questions where questions_id=$student['questions_fkey']";
$questions = mysqli_query($con, $ques);

if (mysqli_num_rows($ques) > 0)
{
    foreach($ques as $row) {
        $id = $row['standard_id'];
        $n1 = $row['B1.1']+$row['B2.1']+$row['B3.1']+$row['B4.1']+$row['B5.1'];
$n2=$row['T1.1']+$row['T2.1']+$row['T3.1']+$row['T4.1']+$row['T5.1'];
$n3=$row['V1.1']+$row['V2.1']+$row['V3.1']+$row['V4.1']+$row['V5.1'];
        echo "$n1,' ',$n2,' ',$n3";
     }
}
  
?>