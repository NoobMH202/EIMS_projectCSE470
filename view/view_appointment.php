<?php
include 'model\_dbconnect.php';
$query = "SELECT * FROM appointment;";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointment</title>

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
            <h2 style="color:#DF2E38;">Here you can check appointment</h2>
            <?php
            echo "<table>";
            echo "            
            <tr>
                <th>Appointment Request By</th>
                <th>Teacher Name</th>
                <th>Course</th>
                <th>Preferable Time</th>
                <th>Additional Comment</th>
                <th>Response</th>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $sname= $row['student_name'];
                $tname= $row['teacher_name'];
                $course= $row['course']; 
                $ptime= $row['preferable_time'];
                $acomment= $row['additional_comment'];                
                echo '<tr>
                <td>'.$sname.'</td>
                <td>'.$tname.'</td>
                <td>'.$course.'</td>
                <td>'.$ptime.'</td>
                <td>'.$acomment.'</td>
                <td>
                <button type="submit" value="Submit" style=" background-color: #4CAF50; border-radius: 50%; width:50px; height:50px; color: white; padding: 10px 24px; text-align: center;display: flex;align-items: center;justify-content: center; text-decoration: none; cursor: pointer; font-size: 10px;float:left; border: 1px solid green;">Approve</button>
                <button type="submit" value="Submit" style=" background-color: #f44336; border-radius: 50%; width:50px; height:50px; color: white; padding: 10px 24px; text-align: center;display: flex;align-items: center;justify-content: center; text-decoration: none; cursor: pointer; font-size: 10px;float:left; border: 1px #f44336;">Deny</button>
                </td>

                </tr>';

            } 
            echo "</table>";
            ?>
        </div>  
    </div> 
</body>
</html>