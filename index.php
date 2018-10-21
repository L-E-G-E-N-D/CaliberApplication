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
// Start of the Add category code
var exercise = 1;
    exercise++;
    var objTo = document.getElementById('room_fileds');
    var divtest = document.createElement("div");
    divtest.innerHTML = '<button id="openExerciseModal">Open Modal</button><h1 id="displayExerciseContentText"></h1><h1 id="displayExerciseContentReps"></h1><h1 id="displayExerciseContentSets"></h1><div id="ExerciseModal" class="modal"><div class="ExerciseModalContent"><span class="ExerciseModalClose">&times;</span><table><tr><td>Name of Exercise<input type="text" id="exerciseContent"></td></tr><tr><td>Repetitions<input type="text" id="exerciseReps"></td></tr><tr><td>Sets<input type="text" id="exerciseSets"></td></tr><br></table><button onclick="SaveExerciseContent()" id="saveClose" name="saveExer">Save Exercise</button></div></div>';
    
    objTo.appendChild(divtest);
    var exerModal = document.getElementById('ExerciseModal');
    var exerBtn = document.getElementById("openExerciseModal");
    var saveButtonModalClose = document.getElementById("saveClose")[0];
    var span = document.getElementsByClassName("ExerciseModalClose")[0];
    exerBtn.onclick = function() {
        exerModal.style.display = "block";
    }
    span.onclick = function() {
        exerModal.style.display = "none";
    }
    saveButtonModalClose.onclick = function() {
        exerModal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            exerModal.style.display = "none";
        }
    }
    function SaveExerciseContent() {
        var displayExerciseContent = document.getElementById("exerciseContent").value;
        document.getElementById("displayExerciseContentText").innerHTML = displayExerciseContent;
        var displayExerciseReps = document.getElementById("exerciseReps").value;
        document.getElementById("displayExerciseContentReps").innerHTML = displayExerciseReps;
        var displayExerciseSets = document.getElementById("exerciseSets").value;
        document.getElementById("displayExerciseContentSets").innerHTML = displayExerciseSets;
    }
/* Start of the Opening Add Exercise Modal Code */

/*// Start of the Save Text when clicked save inputs
function SaveInputText() {
    var text = document.getElementById("exerTitle").value;
    document.getElementById("title").innerHTML = text;
}
*/
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