<?php include "header.php" 

?>

<section>
    <div class="login-container">
        <div class="login-image">
            <img src="admin/uploads/source/signup.png" alt="Login Image">
        </div>
        <div class="login-form">
            <h2>Sign up</h2>
            <small>We are happy to have you join us.</small>
            <form action="login.php" method="post"> 
                <label for="username">
                <input type="number" id="username" name="username" placeholder="Enter new mobile number"  maxlength="10" style="" required>
                <label for="password">
                <input type="text" id="password" name="password" placeholder="Create new password"  maxlength="10" style="" required>
                <input type="submit" name="signup" value="Sign up">
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


