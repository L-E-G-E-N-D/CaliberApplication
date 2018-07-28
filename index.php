<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Caliber Fitness</h2>
        <img src="CaliberLogo.jpg">
        <h1>The best way to improve your lives</h1>
        <p>Caliber is the best fitness tracking application<br>developed to make your lives easier. Our products<br> have proved to keep everyone organized and on track!</p>
        <a href="#">Contact Us</a>
        <a href="#">Your Dashboard</a>
        <?php
            include_once 'signedin.php';
        ?>
<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php
        if (isset($_SESSION['u_id'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Logout</button>
                    </form>';
        } else {
            echo '<form action="includes/login.inc.php"  method="POST">
                    <input type="text" name="uid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign Up</a>';
        }
    ?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  
    </div>
</section>
<?php
    include_once 'footer.php';
?>