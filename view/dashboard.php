<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_page.php");
    exit;
} 
include 'model\_dbconnect.php';
$query = "SELECT * FROM pur_course where course_type='Online';";
$result = mysqli_query($conn, $query);

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql="DELETE FROM pur_course WHERE id='$id'";
    $result1 = mysqli_query($conn, $sql);
    if($result1) {
        echo "<script>alert('Course deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting course.');</script>";
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
    <title>Dashboard</title>
    <style>
        body{
            background-size: cover;
            background: #3a6186;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89253e, #3a6186); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        table {
        border-collapse: collapse;
        width: 100%;
        font-size: 20px;
        line-height: 2.5;
        margin: 0;
        padding: 0;
        }

		th, td {
            font-size: larger;
			padding: 20px;
			text-align: center;
			vertical-align: middle;
		}
		th {
			color:#DF2E38;
			font-weight: bold;
			text-transform: uppercase;
		}

		a {
			color: #0077c3;
			display: block;
			font-weight: bold;
			text-decoration: none;
			transition: all 0.3s ease-in-out;
		}
		a:hover {
			color: #FFFFFF;
		}
        button:hover{
            color: #FFFFFF;
            cursor:pointer;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="centered">
      <h2 style="text-align: center; color:#DF2E38;">Hello, <?php echo $_SESSION['username'] ?>! Welcome to your dashboard!</h2>
      <br>
      <?php
        echo "<table>";
        echo "            
        <tr>
          <th>Course Name</th>
          <th>Action</th>
        </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td><a href='#'" . $row['course'] . "'>" . $row['course'] . "</a></td>";
          echo "<td>
      <form action='/fahimphp/dashboard.php' method='post'>
          <input type='hidden' name='id' value='" . $row['Sid'] . "'>
          <button type='submit' name='delete' style='font-weight: bold; background-color: #0F6292;  font-size: 16px; padding: 14px 40px; border: 2px solid #000000;'>Drop Course</button>
      </form>
      
      
      
      
              </td>";
          echo "</tr>";
        } 
        echo "</table>";

        if(isset($_POST['delete']) && isset($_POST['id'])) {
          $id = $_POST['id'];
          $sql = "DELETE FROM pur_course WHERE Sid='" . $id . "'";
          $result1 = mysqli_query($conn, $sql);
          header("location: dashboard.php");
          exit;
      }
      
        
        
      ?>
    </div>  
  </div>
</body>

