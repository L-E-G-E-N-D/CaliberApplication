<?php
    include_once 'noHeader.php';
?>

<form class="signin-form" action="includes/login.inc.php" method="POST">
    <p class="titlelabelStyleSignIn">Welcome back!</p>
    <input class="signInInpStyle" type="text" name="uid" placeholder="Username/Email">
    <input class="signInInpStyle" type="password" name="pwd" placeholder="Password">
    <button class="signin-button-links-style" type="submit" name="submit">Sign in to your account</button>
    <div class="signUpPrompt"><p class="labelStyle">Don't have an account?<a class="signUpFromSignIn" href="signup.php">Sign Up</a></p></div>
</form>

<?php
    include_once 'footer.php';
?>