<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_page.php");
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! <?php echo $_SESSION['username'] ?></title>
</head>
<body>
    <div class="container">
        <img src="img2.jpg" alt="EIMS" width="100%" class="center">
        <div class="centered">


            <h2 style="text-align: center" > Hello! <?php echo $_SESSION['username'] ?> You have successfully log in to Education Information Management System</h2>
            <h2 style="text-align: center">Now you are ready to complete your advising</h2>
            <hr>
        
            <div class="navigatebtn">
                <span class="navbtn">
        
                    <a href="browse_courses.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Browse available courses</button></a>
                    <a href="purchase_course.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Purchase course</button></a>
                    <a href="make_appointment.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #050505;">Make appointment with teacher</button></a>
                    <a href="your_profile.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Your profile</button></a>
                    <a href="edit_profile.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Edit your profile</button></a>
                    <a href="welcome_page.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Sign Out</button></a>
        
                </span>
            </div>
        </div>
    </div>
</body>
</html>