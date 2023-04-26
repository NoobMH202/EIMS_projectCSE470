<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'model\_dbconnect.php';
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['password'];
    $exists=false;

    if(($password==$cpassword) && $exists==false){
        $sql="UPDATE `info` SET `password` = '$password' WHERE `info`.`name` = '$username';";
        $result=mysqli_query($conn,$sql);
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
                Reset Password
            </h2>
            <br>
            <p style="color:#DF2E38;">Please fill this form out to reset your password.</p>
            <hr>
    
        <form action="/fahimphp/reset.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                        Username: <input type="text" name="username" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        New Password: <input type="password" name="password" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                        Confirm Password: <input type="password" name="password" style = "Width: 200px; height:30px; border-radius: 4px; border: 2px solid #000000;">
                        <br>
                        <br>
                       <span>
                        <button type='submit' style="font-weight: bold; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Submit</button> </a>
                       </span>                     
                    </div>  
                </form>
            </div>

        </form>
        </div>
    </div>

</body>
<!-- </html>> -->
<!-- </body> -->
</html>