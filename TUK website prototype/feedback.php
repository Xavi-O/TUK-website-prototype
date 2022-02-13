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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['msg'];
        
        $connect=mysqli_connect("localhost", "id16674405_root","#@Xavi97#@Xavi97", "id16674405_portal");
            
        if(!$connect)
         {
            echo 'Failed to connect to database: '.mysqli_connect_error();
         }
        elseif($name == null || $email == null || $message == null)
         {
            echo "<h2>
                    No Fields can be left empty! <br>
                    please try again <br>
                    <button><a href='index.php'>Close</a></button>
                </h2>";
         }
        elseif($name != null && $email != null && $message != null)
         {
            mysqli_query($connect, "INSERT INTO `feedback` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");
            echo "<table>
                    <h3>Your Message has been submitted. Thank you</h3>
                    <tr>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Message</th>
                    </tr>
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$message</td>
                    </tr>
                    </tr>
                </table>
                <button><a href='index.php'>Close</a></button>";
         }
    ?>
</body>
</html>