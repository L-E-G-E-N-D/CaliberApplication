<div class="tabs-container__content" data-tab="3">
    <div class="activ_box_tab">
        <p class="tab-box-title">Activity tracker</p>
        <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
    </div>
    <div class="topRowButtons">
        <button id="newWork">New</button>
        <div id="workoutMod" class="newWorkout">
            <div class="workoutEntry">
                <form action="includes/exerdet.inc.php" method="POST">
                    <label class="labelStyle">Workout</label>
                    <input type="text" name="exername" class="inputStyle">
                    <label class="labelStyle">Weight</label>
                    <input type="number" name="exerweight" class="inputStyle">
                    <label class="labelStyle">Body Part</label>
                    <input type="text" name="exerpart" class="inputStyle">
                    <label class="labelStyle">Repetitions</label>
                    <input type="number" name="exerreps" class="inputStyle">
                    <label class="labelStyle">Sets</label>
                    <input type="number" name="exersets" class="inputStyle">
                    <label class="labelStyle">Time</label>
                    <input type="number" name="exertime" class="inputStyle">
                    <input type="submit" value="Create Workout" name="workoutsubmit" class="submitWorkout">
                    <span class="closeWorkout">Close</span>
                </form>
            </div>
        </div>
    </div>
    <div class="activ_track_table">
        <table>
        <tr class="name_row">
            <th>Workout Name</th>
            <th>Weight</th>
            <th>Body Part</th>
            <th>Repetitions</th>
            <th>Sets</th>
            <th>Time(Secs.)</th>
            <?php
            include_once 'includes/dbh.inc.php';
            $exerfetch = "SELECT * FROM updatedexercisedata;";
            $exerresult = mysqli_query($connec, $exerfetch);
            $exerrresultcheck = mysqli_num_rows($exerresult);
            
            if ($exerrresultcheck > 0) {
                while($exerrow = mysqli_fetch_assoc($exerresult)) {
                    echo "<tr><td>";
                    echo $exerrow['exername'];
                    echo "</td><td>";
                    echo $exerrow['exerweight'];
                    echo "</td><td>";
                    echo $exerrow['exerpart'];
                    echo "</td><td>";
                    echo $exerrow['exerreps'];
                    echo "</td><td>";
                    echo $exerrow['exersets'];
                    echo "</td><td>";
                    echo $exerrow['exertime']."<br>";
                    echo "</td></tr>";
                }
            }
        ?>
        </tr>
        </table>
    </div>
</div>
<script>
var newWorkout = document.getElementById("workoutMod");
    var newWork = document.getElementById("newWork");
    var closeButton = document.getElementsByClassName("closeWorkout")[0];
    newWork.onclick = function() {
    newWorkout.style.display = "block";
    }
    closeButton.onclick = function() {
    newWorkout.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == newWorkout) {
        newWorkout.style.display = "none";
    }
    }
</script>