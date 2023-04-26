<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'model\_dbconnect.php';

    //$cname=$_POST    ['cname'];
    $ctitle=$_POST   ['ctitle'];
    $fname=$_POST    ['fname'];
    //$preq=$_POST     ['preq'];
    //$schedule=$_POST ['schedule'];
    $ctype=$_POST    ['ctype'];

    $sql="INSERT INTO `course` ( `course_title`, `faculty_initial`, `course_type`) 
    VALUES ( '$ctitle', '$fname', '$ctype');";
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
    <title>Create Courses</title>
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
                Hello! Teacher
            </h2>
            <br>
            <p style="color:#DF2E38;">Submit your courses here.</p>
            <hr>
    
        <form action="/fahimphp/create_courses.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                        Course Title: <input type="text" name="ctitle" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Faculty name(Initial): <input type="text" name="fname" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Course Type: 
                        <select type="text" name="ctype" class="form-control" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;"> 
                        <option value="Computer Science">Computer Science</option>
                        <option value="Business and Management">Business and Management</option>
                        <option value="Others">Others</option>
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