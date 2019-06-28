<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">

        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <p class="titlelabelStyle">Create your Caliber account now</p>
            <div class="linksStyle">
                <label class="labelStyle">First Name</label>
                <input class="inpStyle" type="text" name="first">
            </div>

            <div class="linksStyle">
                <label class="labelStyle">Last Name</label>
                <input class="inpStyle" type="text" name="last">
            </div>

            <div class="linksStyle">
                <label class="labelStyle">Email</label>
                <input class="inpStyle" type="text" name="email">
            </div>

            <div class="linksStyle">
                <label class="labelStyle">Username</label>
                <input class="inpStyle" type="text" name="uid">
            </div>

            <div class="linksStyle">
                <label class="labelStyle">Password</label>
                <input class="inpStyle" type="password" name="pwd">
            </div>

            <br>

            <div class="linksStyle">
                <button class="submit-button-links-style" type="submit" name="submit">Create your Caliber account</button>
            </div>
            <div class="signUpPrompt">
                <p class="labelStyle">Already have an account?<a class="signUpFromSignIn" href="signin.php">Sign In</a></p>
            </div>
        </form>
    </div>
</section>
<?php
    include_once 'footer.php';
?>