<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="EIMS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Course</title>
</head>
<body>
<div class="container">
        <img src="img2.jpg" alt="EIMS" width="100%" class="center">
        <div class="centered">
        <h1 style="text-align: center; margin-top: 5%;" >Purchase Courses</h1>
    <hr>

    <div class="drpdwn">
        <form>
            <label for="Course name and Course code">Course name and Course code:</label>
            <br>
            <select> <!--<(previous line)select id="cars" name="cars">-->
              <option value="CSE230">CSE230 Dicrete Mathematics</option>
              <option value="CSE220">CSE220 Data Structures</option>
              <option value="CHN101">CHN101 Chinese Language</option>
              <option value="EEE321">EEE321 Micro processors</option>
            </select>
          </form>
          <br>

        <form id="dd2">
          <label for="Payment">Make Payment:</label>
          <br>
          <select> <!--<(previous line)select id="cars" name="cars">-->
            <option value="Bkash">Bkash</option>
            <option value="Nagad">Nagad</option>
            <option value="Credit Card">Credit Card</option>
          </select>
        </form>
        <br>

        <button class="subbtn1">submit</button>
        <!--<span class="subbtn1"><input type="submit"></span>-->
    </div>
        </div>
    </div>
</body>
</html>
