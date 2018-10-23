<?php
    include_once 'header.php';
?>
<div class="tracking-categories">
    <a class="tracking-categories-home" href="index.php">Back to Home</a>
    <div id="room_fileds">
        <!-- <div class="container">
            <ul class="ks-cboxtags">
                <li><input type="checkbox" id="checkboxOne"><label for="checkboxOne">Anaerobic Exercise</label></li><br>
                <li><input type="checkbox" id="checkboxTwo"><label for="checkboxTwo">Aerobic Excercise</label></li><br>
                <li><input type="checkbox" id="checkboxThree"><label for="checkboxThree">Strength Excercise</label></li><br>
                <li><input type="checkbox" id="checkboxFour"><label for="checkboxFour">Cardio Excercise</label></li><br>
                <li><input type="checkbox" id="checkboxFive"><label for="checkboxFive">Core Training</label></li><br>
                <li><input type="checkbox" id="checkboxSix"><label for="checkboxSix">Stretching</label></li><br>
            </ul>
        </div> -->
    </div>
    <table>
        <tr>
            <th>Name of Exercise</th>
            <th>Repetitions</th>
            <th>Sets</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
    </table>
<div class="update_table">    
<table>
    <tr>
        <th>Anaerobic Exercises</th>
        <th>Aerobic Excercises</th>
        <th>Strength Excercises</th>
        <th>Cardio Excercises</th>
        <th>Core Training</th>
        <th>Stretching</th>
    </tr>
    <tr>
        <td id="checkBoxOneDisplay">Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td id="checkBoxTwoDisplay">Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td id="checkBoxThreeDisplay">Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td id="checkBoxFourDisplay">Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td id="checkBoxFiveDisplay">Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td id="checkBoxSixDisplay">Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
</table>
</div>
</div>
<div class="newOpenModalsWithId">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <button id="append">Add Exercise</button>
    <div id="parent"></div>
<div id="parent"></div>
</div>
<script>
var exercise = 1;
    exercise++;
    var objTo = document.getElementById('room_fileds');
    var divtest = document.createElement("div");
$(function(){
  var count = 0;
  $('#append').click(function(){
    $('#parent').append('<button id="openExerciseModal">Open Modal</button><h3 id="displayExerciseContentText"></h3><h3 id="displayExerciseContentReps"></h3><h3 id="displayExerciseContentSets"></h3><div id="ExerciseModal" class="modal"><div class="ExerciseModalContent"><span class="ExerciseModalClose">&times;</span><table><tr><td>Name of Exercise<input type="text" id="exerciseContent"></td></tr><tr><td>Repetitions<input type="text" id="exerciseReps"></td></tr><tr><td>Sets<input type="text" id="exerciseSets"></td></tr><br></table><button onclick="SaveExerciseContent()" id="saveClose" name="saveExer">Save Exercise</button><div class="container"><ul class="ks-cboxtags"><li><input type="checkbox" onclick="SaveExercises()" id="checkboxOne"><label for="checkboxOne">Anaerobic Exercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxTwo"><label for="checkboxTwo">Aerobic Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxThree"><label for="checkboxThree">Strength Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxFour"><label for="checkboxFour">Cardio Excercise</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxFive"><label for="checkboxFive">Core Training</label></li><li><input type="checkbox" onclick="SaveExercises()" id="checkboxSix"><label for="checkboxSix">Stretching</label></li></ul></div></div></div>'+count+'"><br>');
    count++;
  });
});
    
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
</script>

<div class="tracking-items">
    <button class="tracking-items-change" name="changetheme">Change Theme</button>
</div>