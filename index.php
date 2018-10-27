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
    divtest.innerHTML = '<button class="openModalClass" id="openExerciseModal">Add Exercise Details</button><h3 id="displayExerciseContentText"></h3><h3 id="displayExerciseContentReps"></h3><h3 id="displayExerciseContentSets"></h3><div id="ExerciseModal" class="modal"><div class="ExerciseModalContent"><span class="ExerciseModalClose">&times;</span><table><tr class="no_style"><td>Exercise<input type="text" class="exerStyle" id="exerciseContent"></td></tr><tr class="no_style"><td>Repetitions<input type="text" class="exerStyle" id="exerciseReps"></td></tr><tr class="no_style"><td>Sets<input type="text" class="exerStyle" id="exerciseSets"></td></tr><br></table><button onclick="SaveExerciseContent()" class="saveStyle" id="saveClose" name="saveExer">Save Exercise</button><div class="container"><ul class="ks-cboxtags"><li><input type="checkbox" onclick="SaveExercises()" id="checkboxOne"><label for="checkboxOne">Anaerobic Exercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxTwo"><label for="checkboxTwo">Aerobic Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxThree"><label for="checkboxThree">Strength Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxFour"><label for="checkboxFour">Cardio Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxFive"><label for="checkboxFive">Core Training</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxSix"><label for="checkboxSix">Stretching</label></li></ul></div></div></div>';
    
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
    function SaveExercises() {
        var displayExerciseCheckOneName = document.getElementById("exerciseContent").value;
        var displayExerciseTypeCheckBoxOne = document.getElementById("checkboxOne").value;
        document.getElementById("checkBoxOneDisplay").innerHTML = displayExerciseCheckOneName;
        var displayExerciseCheckTwoName = document.getElementById("").value;
        var displayExerciseTypeCheckBoxTwo = document.getElementById("checkboxTwo").value;
        document.getElementById("checkBoxTwoDisplay").innerHTML = displayExerciseCheckTwoName;
        var displayExerciseCheckThreeName = document.getElementById("").value;
        var displayExerciseTypeCheckBoxThree = document.getElementById("checkboxThree").value;
        document.getElementById("checkBoxThreeDisplay").innerHTML = displayExerciseCheckThreeName;
        var displayExerciseCheckFourName = document.getElementById("").value;
        var displayExerciseTypeCheckBoxFour = document.getElementById("checkboxFour").value;
        document.getElementById("checkBoxFourDisplay").innerHTML = displayExerciseCheckFourName;
        var displayExerciseCheckFiveName = document.getElementById("").value;
        var displayExerciseTypeCheckBoxFive = document.getElementById("checkboxFive").value;
        document.getElementById("checkBoxFiveDisplay").innerHTML = displayExerciseCheckFiveName;
        var displayExerciseCheckSixName = document.getElementById("").value;
        var displayExerciseTypeCheckBoxSix = document.getElementById("checkboxSix").value;
        document.getElementById("checkBoxSixDisplay").innerHTML = displayExerciseCheckSixName;
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