<?php
session_start();

// ইউজার লগইন করা আছে কি না চেক করা
if(!isset($_SESSION['status'])){
    header('location: login.php');
    exit();
}

$user = $_SESSION['user']; // বর্তমান সেশন ডাটা নেওয়া 

// ফর্ম সাবমিট হলে ডাটা আপডেট করা
if(isset($_POST['submit'])){
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['gender'] = $_POST['gender'];
    $_SESSION['user']['dob'] = $_POST['dob'];
    
    header('location: view_profile.php'); // আপডেট শেষে প্রোফাইল পেজে পাঠানো
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile - xCompany</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td colspan="2">
                <table width="100%">
                    <tr>
                        <td><img src="logo.png" alt="xCompany" width="150px"></td>
                        <td align="right">
                            Logged in as <a href="view_profile.php"><?php echo $_SESSION['user']['name']; ?></a> | 
                            <a href="logout.php">Logout</a> [cite: 339]
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

            <td height="400px" valign="top">
                <div style="padding: 20px;">
                    <form method="post" action="">
                        <fieldset>
                            <legend><b>EDIT PROFILE</b></legend>
                            <table width="100%">
                                <tr>
                                    <td>Name</td>
                                    <td>: <input type="text" name="name" value="<?php echo $user['name']; ?>"></td> [cite: 343, 345]
                                </tr>
                                <tr colspan="2"><td><hr></td></tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <input type="email" name="email" value="<?php echo $user['email']; ?>"> <b>i</b></td> [cite: 348, 349]
                                </tr>
                                <tr colspan="2"><td><hr></td></tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>: 
                                        <input type="radio" name="gender" value="Male" <?php if($user['gender'] == 'Male') echo "checked"; ?>> Male
                                        <input type="radio" name="gender" value="Female" <?php if($user['gender'] == 'Female') echo "checked"; ?>> Female
                                        <input type="radio" name="gender" value="Other" <?php if($user['gender'] == 'Other') echo "checked"; ?>> Other
                                    </td> [cite: 353, 355]
                                </tr>
                                <tr colspan="2"><td><hr></td></tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>: <input type="text" name="dob" value="<?php echo $user['dob']; ?>"> <i>(dd/mm/yyyy)</i></td> [cite: 357, 358]
                                </tr>
                                <tr colspan="2"><td><hr></td></tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Submit"> [cite: 368]
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright © 2017 [cite: 370]
            </td>
        </tr>
    </table>
</body>
</html>