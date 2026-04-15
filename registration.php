<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['password'] == $_POST['confirm_password']){ 
        $user = [
            'name'     => $_POST['name'],
            'email'    => $_POST['email'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'gender'   => $_POST['gender'],
            'dob'      => $_POST['dd']."/".$_POST['mm']."/".$_POST['yyyy']
        ];
        
        $_SESSION['user'] = $user;
        header('location: login.php');
        echo "Password and Confirm Password do not match!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration - xCompany</title>
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
            <td height="400px" align="center">
                <form method="post" action="">
                    <fieldset style="width: 400px; text-align: left;">
                        <legend><b>REGISTRATION</b></legend>
                        <table width="100%">
                            <tr>
                                <td>Name</td>
                                <td>: <input type="text" name="name" required></td>
                            </tr>
                            <tr colspan="2"><td style="border-bottom: 1px solid #ccc;"></td></tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email" required> <b>i</b></td>
                            </tr>
                            <tr colspan="2"><td style="border-bottom: 1px solid #ccc;"></td></tr>
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="username" required></td>
                            </tr>
                            <tr colspan="2"><td style="border-bottom: 1px solid #ccc;"></td></tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password" required></td>
                            </tr>
                            <tr colspan="2"><td style="border-bottom: 1px solid #ccc;"></td></tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>: <input type="password" name="confirm_password" required></td>
                            </tr>
                            <tr colspan="2"><td style="border-bottom: 1px solid #ccc;"></td></tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male"> Male 
                                        <input type="radio" name="gender" value="Female"> Female 
                                        <input type="radio" name="gender" value="Other"> Other [cite: 280]
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="text" name="dd" size="2"> / 
                                        <input type="text" name="mm" size="2"> / 
                                        <input type="text" name="yyyy" size="4"> (dd/mm/yyyy) [cite: 283]
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset"> [cite: 284]
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