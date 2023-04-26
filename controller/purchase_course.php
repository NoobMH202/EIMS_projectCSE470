<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'model\_dbconnect.php';

    $sname=$_POST    ['sname'];
    $Sid=$_POST['idname'];
    //$Email=$_POST['email'];
    $cname=$_POST   ['cname'];
    $pay=$_POST    ['pay'];
    $ctype=$_POST    ['ctype'];
    $sql="INSERT INTO `pur_course` (`student_name`, `Sid`, `course`, `paid_by`, `course_type`) VALUES ('$sname', '$Sid', '$cname', '$pay', '$ctype');";
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
    <title>Purchase Course</title>
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
              Purchase Courses
            </h2>
            <hr>
    
        <form action="/fahimphp/purchase_course.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                       
                        Your Name: <input type="text" name="sname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">

                        <br>
                        <br>
                        Your ID: <input type="text" name="idname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Course Name and Course Code: 
                        <!-- <input type="text" name="cname" placeholder="Search here" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <button type="button" class="form-control" style="background: tomato; height:35px; width:100px; border:none; outline:none; color:#fff; letter-spacing:1px; cursor:pointer;">Search</button> -->
                        
                        <select type="text" name="cname" class="form-control" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;"> 
                        <option value="CS">Discrete Mathemetics (2000 BDT)</option>
                        <option value="CS">Computer Networking (3000 BDT)</option>
                        <option value="BUS">Introduction To Business (1500 BDT)</option>
                        </select>
                        <br>
                        <br>   
                        Make Payment: 
                        <select type="text" name="pay" class="form-control" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;"> 
                        <option value="Bkash">Bkash</option>
                        <option value="Nagad">Nagad</option>
                        <option value="Credit Card">Credit Card</option>
                        </select>
                        <br>
                        <br>
                        Course Type: 
                        <select type="text" name="ctype" class="form-control" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;"> 
                        <option value="Online">Online</option>
                        </select>
                        <br>
                        <br>                      
                       <span>
                        <button type='submit' style="font-weight: bold; width:200px; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Submit</button> 
                       </span>                     
                    </div>  
                </form>
            </div>

        </form>
        </div>
    </div>
</body>
</html>
