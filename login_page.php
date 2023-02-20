<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from info where name='$username' AND password='$password'";
    //$sql = "Select * from info where name='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);


    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:navigating_page.php");
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
    <title>Login</title>
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
        <img src="img2.jpg" alt="EIMS" width="100%" class="center">
        <div class="centered">
            <h2>
                Please Log In
            </h2>
            <br>
            <hr>
    
        <form action="/fahimphp/login_page.php" method="post">

            <div class="userlogin">
                <form>
                    <div class="inp1">
                        Username: <input type="text" name="username" placeholder="Enter your username" required>
                        <br>
                        <br>
                        Password: <input type="password" name="password" placeholder="Enter password" required>
                        <br>
                        <br>
                       <span>
                        <button type='submit' style="font-weight: bold; background-color: #5dacbd;  font-size: 16px; padding: 14px 40px; border-radius: 4px; border: 2px solid #000000;">Click to Log in</button> </a>
                       </span>
                       <p> Don't have an account? <a href="signup_page.php"> <button class="sgnup_btn"> Sign Up Now </button></a></p>
                    </div>  
                </form>
            </div>
        </form>
        </div>
    </div>

</body>
</html>