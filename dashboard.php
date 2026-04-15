<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] != 'true'){
    header('location: login.php');
    exit();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - xCompany</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td colspan="2">
                <table width="100%">
                    <tr>
                        <td><img src="logo.png" alt="xCompany" width="150px"></td>
                        <td align="right">
                            Logged in as <a href="view_profile.php"><?php echo $user['name']; ?></a> | 
                            <a href="logout.php">Logout</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td width="30%" valign="top">
                <div style="padding: 10px;">
                    <b>Account</b>
                    <hr>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="view_profile.php">View Profile</a></li>
                        <li><a href="edit_profile.php">Edit Profile</a></li>
                        <li><a href="profile_picture.php">Change Profile Picture</a></li>
                        <li><a href="change_password.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </td>

            <td height="300px" valign="top">
                <div style="padding: 20px;">
                    <h3>Welcome <?php echo $user['name']; ?></h3> </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright © 2017
            </td>
        </tr>
    </table>
</body>
</html>