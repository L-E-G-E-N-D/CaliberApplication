<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caliber - Online Fitness Tracking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><button id="myBtn">Account Status<?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                                    </form>';
                        }
                    ?></button></li>
                </ul>
                <div class="nav-login">
                </div>
            </div>
        </nav>
    </header>