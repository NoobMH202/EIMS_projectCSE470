<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'model\_dbconnect.php';

    $sname=$_POST    ['sname'];
    $tname=$_POST    ['tname'];
    $cname=$_POST    ['cname'];
    $ptime=$_POST    ['ptime'];
    $acomment=$_POST ['acomment'];


    $sql="INSERT INTO `appointment` (`student_name`, `teacher_name`, `course`, `preferable_time`, `additional_comment`) VALUES ('$sname', '$tname', '$cname', '$ptime', '$acomment');";
    $result=mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Appointment</title>
    <style>
                body{
            background-size: cover;
            background: #3a6186;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89253e, #3a6186); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>
<body>
<div class="container">
        <!-- <img src="img2.jpg" alt="EIMS" width="100%" class="center"> -->
        <div class="centered">
            <h2 style="color:#DF2E38;">
            Here you can request for appointment.
            </h2>
            <br>
            <p style="color:#DF2E38;">Please fill this form out for make an appointment.</p>
            <hr>
    
        <form action="/fahimphp/make_appointment.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                        Student Name: <input type="text" name="sname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Teachers Name(Initial): <input type="text" name="tname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Course Name: <input type="text" name="cname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Preferable Time: <input type="text" name="ptime" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br> 
                        Additional Comment <input type="text" name="acomment" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>                                               
                       
                       <span>
                        <button type='submit' style="font-weight: bold;  width:200px; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Submit</button> </a>
                       </span>                     
                    </div>  
                </form>
            </div>

        </form>
        </div>
    </div>

</body>
</html>