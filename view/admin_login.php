<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'model/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from admin where name='$username' AND password='$password'";
    //$sql = "Select * from info where name='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);


    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:faculty_view.php");
        exit;
    }          
    else{
        $showError = "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <?php
    if($login){
    echo ' <div class="alert alert-success" role="alert">
    Success! You are logged in
  </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger" role="alert">
    Sorry! You are unauthorized to log in
  </div> ';
    }
    ?>    

    <div class="container">
        <!-- <img src="img2.jpg" alt="EIMS" width="100%" class="center"> -->
        <div class="centered">
            <h2 style="color:#DF2E38;">
                Admin Log In
            </h2>
            <br>
            <hr>
    
        <form action="/fahimphp/admin_login.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                        Username: <input type="text" name="username" placeholder="Enter your username" required style = "Width: 200px; height:30px; border-radius: 4px;  border: 2px solid #000000;">
                        <br>
                        <br>
                        Password: <input type="password" name="password" placeholder="Enter password" required style = "Width: 200px; height:30px; border-radius: 4px;  border: 2px solid #000000;">
                        <br>
                        <br>
                       <span>
                        <button type='submit' style="font-weight: bold; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Click to Log in</button> </a>
                       </span>
                    </div>  
                </form>
            </div>
        </form>
        </div>
    </div>

</body>
</html>