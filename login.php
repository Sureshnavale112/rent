<?php include "header.php" ?>



<?php
$username = isset($_GET['username']) ? $_GET['username'] : $username;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
 
</head>
<body>
<section>

    <div class="login-container">
        <div class="login-image">
            <img src="admin/uploads/source/signup.png" alt="Login Image">
        </div>
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                
            <label for="username"  class="text-center">Mobile Number</label>
                <input type="number" id="username" name="username" placeholder="Enter your mobile number" maxlength="30" required 
                    value="<?php echo htmlspecialchars($username); ?>">
                
                    <label for="otp"  class="text-center"> Verify OTP</label>
                    <input type="number" id="otp" placeholder="Enter your otp number" name="otp" required><br><br>
                    <label for="password"  class="text-center">password</label>
                    <input type="text" id="password" placeholder="Enter your password" name="password" required><br><br>
                
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</section>

</body>
</html>



<?php include "footer.php" ?>
