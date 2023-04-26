<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Information Management System</title>
    <style>
        body{
            background-size: cover;
            background: #3a6186;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89253e, #3a6186); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        button {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition-duration: 0.4s;
        }
        button:hover {
            background-color: #97cba9;
            color: #FFFFFF;
            cursor: pointer;
        }


    </style>

</head>
<body>

    <div class="container">
        <!-- <img src="img2.jpg" alt="EIMS" width="100%" class="center"> -->
        <div class="centered">
            <h2 style="text-align: center; color:#DF2E38; ">Welcome to Education Information Management System</h2>
            <h2 style="text-align: center; color:#DF2E38; ">Please Log in to proceed</h2>
        
            <hr>
        
            <div class="loginBtn">
                <span>
                    <a href="admin_login.php"><button style="font-weight: bold; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Admin</button></a>
        
                <br>
                <br>
                    <a href="login_page.php"><button style="font-weight: bold; background-color: #0F6292;  font-size: 16px; padding: 14px 40px;  border: 2px solid #000000;">Student</button></a>
                </span>
            </div>
        </div>
    </div>

</body>
</html>