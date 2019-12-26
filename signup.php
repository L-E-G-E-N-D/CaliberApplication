<?php
    include_once 'noHeader.php';
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
            <div class="signUpPromptSignUp">
                <p class="labelStyle">Already have an account?<a class="signUpFromSignIn" href="signin.php">Sign In</a></p>
            </div>
        </form>
    </div>
    <div class="info-wrapper">
        <div class="check-and-main-point"><i class="fas fa-check-circle"></i><p class="main-point-div-alt">Streamlined process to sign-up</p></div>
        <p class="sub-point-div-alt">Enter your email address and password to easily create an account.</p>
        <div class="check-and-main-point"><i class="fas fa-check-circle"></i><p class="main-point-div-alt">Easy understanding and implementation</p></div>
        <p class="sub-point-div-alt">Go through the entire experience to pick your favorite pages and understand how to record.</p>
        <div class="check-and-main-point"><i class="fas fa-check-circle"></i><p class="main-point-div-alt">Start recording data</p></div>
        <p class="sub-point-div-alt">Easy data-entry techniqes make the process efficient.</p>
    </div>
</section>
<?php
    include_once 'footer.php';
?>