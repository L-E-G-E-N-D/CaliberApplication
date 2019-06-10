<?php
    include_once 'header.php';
?>
        <?php
            include_once 'signedin.php';
        ?>
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
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function RemoveInputs() {
    var inputRemove = document.getElementById("exerTitle");
    var buttonRemove = document.getElementById("removeButton");
    inputRemove.remove(inputRemove);
    buttonRemove.remove(buttonRemove);
}
</script>  
<?php
    include_once 'footer.php';
?>