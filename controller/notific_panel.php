<?php
include 'model\_dbconnect.php';
$query = "SELECT * FROM pur_course;";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification!</title>

    <style>
        body{
            background-size: cover;
            background: #3a6186;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89253e, #3a6186); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        table {
        font-size: 20px;
        line-height: 1.5;
        font-weight: bold;
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }
        td{
            color: #0077c3;
        }
		td:hover {
			color: #FFFFFF;
		}      
    </style>
</head>

<body>
    <div class="container">
        <!-- <img src="img2.jpg" alt="EIMS" width="100%" class="center"> -->
        <div class="centered">
            <h2 style="color:#DF2E38;">You can see all the notification here.</h2>
            <?php
            echo "<table>";
            echo "            
            <tr>
                <th>Student Name</th>
                <th>Course</th>
                <th>Paid Through</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $sname= $row['student_name'];
                $course= $row['course']; 
                $pby= $row['paid_by'];              
                echo '<tr>
                <td>'.$sname.'</td>
                <td>'.$course.'</td>
                <td>'.$pby.'</td>

                </tr>';

            } 
            echo "</table>";
            ?>
        </div>  
    </div> 
</body>
</html>