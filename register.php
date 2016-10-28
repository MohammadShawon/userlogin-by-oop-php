<?php
    require_once "functions.php";
    $user = new LoginRegistration();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header title starts Here -->
    <div class="wrapper">
        <div class="header">
            <h3>User Login by OOP</h3>
        </div>

        <!-- Header title Ends Here -->
        <!-- Menu area starts Here -->
        <div class="mainmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>
        <!-- Main content area start here -->
        <div class="content-area">
            <h2>Sign Up Here</h2>


            <p class="message">
                <?php
                    /* Input Field empty check */
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $website = $_POST['website'];

                        if (empty($username) or empty($password) or empty($email) or empty($website)){
                            echo "<span style='color:red'>Error! Please Fill All Fields</span>";
                        }
                        else{
                            $password = md5($password);
                           $register = $user->registerUser($username,$password,$email,$website);
                            if ($register){
                                echo "<span style='color: #fff'>Register Done <a href='login.php'>Click Here</a> for Login </span>";
                            }
                            else{
                               echo "<span style='color: red'>Username or Email already Exists</span>";
                            }
                        }
                    }
                ?>
            </p>
            <div class="login-reg">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>UserName:</td>
                            <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" placeholder="Enter Your Email"></td>
                        </tr>
                        <tr>
                            <td>Website:</td>
                            <td><input type="text" name="website" placeholder="Enter Your Website Address"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="register" value="Register">
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="back">
                <a href="index.php">
                    <button>Go Back</button>
                </a>
            </div>
        </div>

        <!-- Main Content Area ends Here -->

        <div class="footer-area">
            <footer>
                <h3>&copy <a href="http://wwww.morshadunnur.me"> Morshadun Nur</a></h3>

            </footer>
        </div>
    </div>
</body>
</html>