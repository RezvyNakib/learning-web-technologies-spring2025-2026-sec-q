<?php
session_start();
$message = "";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(isset($_SESSION['user'])){
        if($email == $_SESSION['user']['email'])
            {
            $message = "Your Password is: " . $_SESSION['user']['password'];
        } else 
        {
            $error = "Email does not match our records!";
        }
    } 
    else 
        {
        $error = "No user registered yet!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password - xCompany</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td><img src="logo.png" alt="xCompany" width="150px"></td>
                        <td align="right">
                            <a href="public_home.php">Home</a> | 
                            <a href="login.php">Login</a> | 
                            <a href="registration.php">Registration</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td height="300px" align="center">
                <form method="post" action="">
                    <fieldset style="width: 350px; text-align: left;">
                        <legend><b>FORGOT PASSWORD</b></legend>
                        <table width="100%">
                            <tr>
                                <td>Enter Email:</td>
                                <td><input type="email" name="email" required></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="submit" name="submit" value="Submit">
                        <br><br>
                        <span style="color: green; font-weight: bold;"><?php if(isset($message)) echo $message; ?></span>
                        <span style="color: red; font-weight: bold;"><?php if(isset($error)) echo $error; ?></span>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td align="center">
                Copyright © 2017
            </td>
        </tr>
    </table>
</body>
</html>