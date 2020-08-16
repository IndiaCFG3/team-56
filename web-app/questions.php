<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="C:\Users\billa\OneDrive\Desktop\index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Student Details</title>
    <style>
        body{
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSpHd0kN6YSPAOjYmn7IEf1O4E9Sif6ufvA0TcLDPZHorM-SOL_6P62tYKK0nSFYMdwQ7KNQWr_bdk-B94OW9OUNg&usqp=CAU&ec=45690271);
            background-size: cover;
        
        }
    </style>
</head>
<?php
$con = mysqli_connect("localhost","root", "password","mydb");
if (!$con)
{echo "connection failed due to".mysqli_connect_error();}
$name = $_POST["name"];
$rollno = $_POST["rno"];
$groupno = $_POST["groupno"];
$q1= $_POST["q1"];
$q2= $_POST["q2"];
$q3= $_POST["q3"];
$q4= $_POST["q4"];
$q5= $_POST["q5"];
$q6= $_POST["q6"];
$q7= $_POST["q7"];
$q8= $_POST["q8"];
$q9= $_POST["q9"];
$q10= $_POST["q10"];
$q11= $_POST["q11"];
$q12= $_POST["q12"];
$q13= $_POST["q13"];
$q14= $_POST["q14"];
$q15= $_POST["q15"];
$r1= $_POST["r1"];
$r2= $_POST["r2"];
$r3= $_POST["r3"];
$r4= $_POST["r4"];
$r5= $_POST["r5"];
$r6= $_POST["r6"];
$r7= $_POST["r7"];
$r8= $_POST["r8"];
$r9= $_POST["r9"];
$r10= $_POST["r10"];
$r11= $_POST["r11"];
$r12= $_POST["r12"];
$r13= $_POST["r13"];
$r14= $_POST["r14"];
$r15= $_POST["r15"];
$query="INSERT INTO VALUES('$name','$rollno','$groupno','$q1','$r1','$q2','$r2','$q3','$r3','$q4','$r4','$q5','$r5','$q6','$r6','$q7','$r7',
'$q8','$r8','$q9','$r9','$q10','$r10','$q11','$r11','$q12','$r12','$q13','$r13','$q14','$r14','$q15','$r15')";
// $result = mysqli_query($con, $select);
mysqli_query($con,$query);
?>
<body>

    <form id="form1" action="questions.php" method="POST">
        <div class="container p-5 my-5 mx-auto">
            <h3><kbd>Student Detail Form:-</kbd></h3><br>  
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name"><br><br>   

                <label for="rollno">Roll No:</label>
                <input type="number" id="rno" name="rno"><br><br>

                <label for="groupno">Group No:</label>
                <input type="text" id="groupno" name="groupno">

                <hr>
                
                <label for="q1">1. share my opinions in group discussions.  </label>
                <input type="checkbox" id="q1" name="q1"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r1" name="r1" rows="3" cols="50">    </textarea><br><br>

                <label for="q2">2. use polite tone, kind words and maintain eye contact during group discussion.</label>
                <input type="checkbox" id="q2" name="q2"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r2" name="r2" rows="3" cols="50">    </textarea><br><br>

                <label for="q3">3. express my point of view even if it is different from the group.</label>
                <input type="checkbox" id="q3" name="q3"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r3" name="r3" rows="3" cols="50">    </textarea><br><br>

                <label for="q4">4. listen to the opinion of others in group discussion.</label>
                <input type="checkbox" id="q4" name="q4"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r4" name="r4" rows="3" cols="50">    </textarea><br><br>

                <label for="q5">5. ask suggestions/questions to my group when  am stuck/confused about the task. </label>
                <input type="checkbox" id="q5" name="q5"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r5" name="r5" rows="3" cols="50">    </textarea><br><br>

                <hr color="black" > 

                <label for="q6">6. observe smaller details and make connections to the larger situation.</label>
                <input type="checkbox" id="q6" name="q6"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r6" name="r6" rows="3" cols="50">    </textarea><br><br>

                <label for="q7">7.My questions reflect systematic thought process/reasoning.  </label>
                <input type="checkbox" id="q7" name="q7"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r7" name="r7" rows="3" cols="50">    </textarea><br><br>

                <label for="q8">8. persist till a reasonable conclusion is formed. </label>
                <input type="checkbox" id="q8" name="q8"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r8" name="r8" rows="3" cols="50">    </textarea><br><br>

                <label for="q9">9. can find patterns across ideas or concepts in the task.</label>
                <input type="checkbox" id="q9" name="q9"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r9" name="r9" rows="3" cols="50">    </textarea><br><br>

                <label for="q10">10. present results and evolution of ideas.</label>
                <input type="checkbox" id="q10" name="q10"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r10" name="r10" rows="3" cols="50">    </textarea><br><br>

                <hr color="black">

                <label for="q11">11. explore new or different ways to do things.</label>
                <input type="checkbox" id="q11" name="q11"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r11" name="r11" rows="3" cols="50">    </textarea><br><br>

                <label for="q12">12. generate new ideas in any given situation.</label>
                <input type="checkbox" id="q12" name="q12"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r12" name="r12" rows="3" cols="50">    </textarea><br><br>

                <label for="q13">13. implement learning and feedback to improve the ideas.</label>
                <input type="checkbox" id="q13" name="q13"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r13" name="r13" rows="3" cols="50">    </textarea><br><br>

                <label for="q14">14. test different ideas to select the best solution.</label>
                <input type="checkbox" id="q14" name="q14"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r14" name="r14" rows="3" cols="50">    </textarea><br><br>

                <label for="q15">15. am confident to try new or challenging task/activity of any form. </label>
                <input type="checkbox" id="q15" name="q15"><br><br> 

                <label for="reason">Reason:</label><br>

                <textarea id="r15" name="r15" rows="3" cols="50">    </textarea><br><br>  

                <a class="btn btn-primary " >Submit</a>

        </div>




    </form>
    
</body>
</html>