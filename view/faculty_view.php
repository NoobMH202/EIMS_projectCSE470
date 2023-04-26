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
        <div class="centered">


            <h2 style="text-align: center" > Hello! <?php echo $_SESSION['username'] ?> You have successfully log in to Education Information Management System</h2>
            <hr>
        
            <div class="navigatebtn">
                <span class="navbtn">
        
                    <a href="browse_courses.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Browse courses</button></a>
                    <a href="create_courses.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Create new course</button></a>
                    <a href="view_appointment.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #050505;">Check appointment</button></a>
                    <a href="notific_panel.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Notification</button></a>
                    <!-- <a href="edit_profile.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Edit your profile</button></a> -->
                    <a href="welcome_page.php"><button button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 19px 40px; border-radius: 4px; border: 2px solid #000000;">Sign Out</button></a>
        
                </span>
            </div>
        </div>
    </div>
</body>
</html>