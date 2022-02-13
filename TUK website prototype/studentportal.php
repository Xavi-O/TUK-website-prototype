<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="images/logo.png">
<?php
        error_reporting(0);
        $username = $_POST['uname'];
        $password = $_POST['pword'];

        $connect=mysqli_connect("localhost", "id16674405_root","#@Xavi97#@Xavi97", "id16674405_portal");

        $result=mysqli_query($connect,"select * from students where first_name = '$username' and password = '$password'");
        if(!$connect)
        {
	        echo 'Failed to connect to database: '.mysqli_connect_error();
        }
        elseif ($row=mysqli_fetch_array($result))
        {
            echo "<h1>Student Portal</h1>
                    <h2>
                    Welcome $username, you have successfully logged in <br>
                    Class list
                    </h2>";
            echo "<table><th>Admission Number</th><th> first name</th><th> last name </th></table>";
                $loginresult=mysqli_query($connect,"select * from students");
                while($row=mysqli_fetch_array($loginresult))
                {
                    echo "<table><td>".$row['reg_number']."<td>".$row['first_name']."<td>".$row['last_name']. "</table>";
                }
            echo "<button><a href='index.html'>Logout</a></button>";
        }
        elseif($username == null || $password == null)
        {
            echo "<p>Enter your username and password to login</p>";
        }
        else
        {
            echo "<p>You have entered the wrong login information! Try Again</p>";
        }
    ?>
</body>
</html>