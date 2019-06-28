<?php
    include_once 'header.php';

    if (isset($_SESSION['u_id'])) {
        echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
                </form>';
    } else {
        echo '<a class="signInlink" href="signin.php">Sign In</a>';
    }

    include_once 'signedin.php';
?>
  </div>
</div>
<?php
    include_once 'footer.php';
?>