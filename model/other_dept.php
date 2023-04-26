<?php
include 'model\_dbconnect.php';
$query = "SELECT * FROM course where course_type='Others';";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Courses</title>

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
        .faculty-link {
            color: #0077c3;
            text-decoration: none;
            font-weight: bold;
        }

        .faculty-link:hover {
            text-decoration: underline;
        }
    </style>    
</head>

<body>
<div class="container">
        <!-- <img src="img2.jpg" alt="EIMS" width="100%" class="center"> -->
        <div class="centered">
            <h2 style="color:#DF2E38;">Browse Courses</h2>

            <br>

            <a href="browse_courses.php"><button style=" background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer; font-size: 16px;float:left; border: 1px solid green;">Computer Science and Technology</button></a>
            <a href="EEE_dept.php"><button style=" background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer; font-size: 16px;float:left; border: 1px solid green;">Business and Management</button></a>
            <a href="other_dept.php"><button style=" background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; cursor: pointer; font-size: 16px;float:left; border: 1px solid green;">Others</button></a>
            <br> 
            <?php
            echo "<table>";
            echo "            
            <tr>
                <th>Course Title</th>
                <th>Faculty Initial</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                //echo "<td>" . $row['course_name'] . "</td>";
                echo "<td>" . $row['course_title'] . "</td>";
                echo "<td><a href='faculty_details.php'" . $row['faculty_initial'] . "' class='faculty-link'>" . $row['faculty_initial'] . "</a></td>";
                //echo "<td>" . $row['faculty_initial'] . "</td>";
                //echo "<td>" . $row['prerequisite'] . "</td>";
               // echo "<td>" . $row['schedule'] . "</td>";
                echo "</tr>";
            } 
            echo "</table>";
            ?>
        </div>  
    </div>
</body>
</html>