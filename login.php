<?php
session_start();
$error = "";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_SESSION['user'])){
        if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
            
            $_SESSION['status'] = 'true';
            if(isset($_POST['remember'])){
                setcookie('username', $username, time() + 3600, '/');
            }
            
            header('location: dashboard.php');
        } else {
            $error = "Invalid User Name or Password!";
        }
    } else {
        $error = "No registration found! Please register first.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - xCompany</title>
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
                        <legend><b>LOGIN</b></legend>
                        <table width="100%">
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password" required></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me <br><br>
                        
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgot_password.php">Forgot Password?</a>
                        
                        <br><br>
                        <span style="color: red;"><?php echo $error; ?></span>
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