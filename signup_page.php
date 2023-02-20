<?php
//$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'partial\_dbconnect.php';
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['password'];
    $exists=false;

    if(($password==$cpassword) && $exists==false){
        $sql="INSERT INTO `info` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
        $result=mysqli_query($conn,$sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EIMS.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <img src="img2.jpg" alt="EIMS" width="100%" class="center">
        <div class="centered">
            <div class="userlogin2">
                <form action="/fahimphp/signup_page.php" method="post">
                    <h2>Sign Up</h2>
                    <h3>Create an account</h3>
                    <hr>
            
                    <div class="inp1">
                        Username: <input type="text" name="username" placeholder="Enter your username">
                        <br>
                        <br>
                        Your Email: <input type="email" name="email" placeholder="Enter your email">
                        <br>
                        <br>
                        Password: <input type="password" name="password" placeholder="Enter password">
                        <br>
                        <br> 
                        Confirm Password: <input type="password" name="password" placeholder="Confirm password">
                        <br>
                        <br>                            
                       <span>
                        <button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 12px 28px; border-radius: 4px; border: 2px solid #000000;">Submit</button>
                        <button style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 12px 28px; border-radius: 4px; border: 2px solid #000000;">Reset</button>   
                       </span>
                    </div>
                    
                    <p> Already have an account? <a href="login_page.php"> <button class="sgnup_btn">Log in here </button></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>