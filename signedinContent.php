<?php
     include_once 'header.php';
 ?>
<div class="tabs-container">
    <div class="tabs-container__sidebar">
        <a href="#" class="tabs-container__tabs tabs-container__tabs--active" data-for-tab="1">Launch</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="2">Authentication</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="3">Track Activity</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="4">Track Food</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="5">Analytics</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="6">Efficiency</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="7">Locations</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="8">Disputes</a>
        <a href="#" class="tabs-container__tabs" data-for-tab="9">Settings</a>
    </div>
    <div class="tabs-container__content tabs-container__content--active"  data-tab="1">
        <div class="intro_box_tab">
            <p class="tab-box-title">Caliber as activity tracking app</p>
            <div class="intro-sub1">
                <div class="intro-style">Implement Caliber into your workouts and see the results for yourself. Measuring something is often the correct way to improve on something.</div>
                <div class="collapse">Activate your Caliber account</div>
                <div class="collcontent" >    
                    <p>Again Shit</p>
                </div> 
            </div>
            <div class="intro-sub2">
                <div class="collapse">Create plans for yourself or get plans from us</div>
                <div class="collcontent">    
                    <p>Look for something again</p>
                </div> 
            </div>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="2">
        <div class="auth_box_tab">
            <p class="tab-box-title">Requested authentications</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
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
                        <input type="text" name="ExerName" class="inputStyle">
                        <label class="labelStyle">Weight</label>
                        <input type="number" name="ExerWeight" class="inputStyle">
                        <label class="labelStyle">Body Part</label>
                        <input type="text" name="ExerPart" class="inputStyle">
                        <label class="labelStyle">Repetitions</label>
                        <input type="number" name="ExerReps" class="inputStyle">
                        <label class="labelStyle">Sets</label>
                        <input type="number" name="ExerSets" class="inputStyle">
                        <label class="labelStyle">Time</label>
                        <input type="number" name="ExerTime" class="inputStyle">
                        <input type="submit" value="Create Workout" class="submitWorkout">
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
            </tr>
            </table>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="4">
        <div class="food_box_tab">
            <p class="tab-box-title">Diet and food traker</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="5">
        <div class="analyt_box_tab">
            <p class="tab-box-title">View your performance - analyzed</p>
            <p id="tab-box-analyt-content">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers.</p>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="6">
        <div class="efficien_box_tab">
            <p class="tab-box-title">Efficiency of workouts</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="7">
        <div class="location_box_tab">
            <p class="tab-box-title">Where you have been</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="8">
        <div class="disp_box_tab">
            <p class="tab-box-title">What doesn't work for you</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
    <div class="tabs-container__content" data-tab="9">
        <div class="sett_box_tab">
            <p class="tab-box-title">Workout settings</p>
            <p class="intro-style">As Caliber is a first generation fitness tracking application, it uses a lot of functionality which is not available for use in other trackers. Go ahead and get started recording your workouts!</p>
        </div>
    </div>
</div>
<script>
    var collapseButt = document.getElementsByClassName("collapse");
    var i;

    for (i = 0; i < collapseButt.length; i++) {
        collapseButt[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var collcontent = this.nextElementSibling;
            if (collcontent.style.display === "block") {
                collcontent.style.display = "none";
            } else {
                collcontent.style.display = "block";
            }
        });
    }

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
   <!--
 <div class="tracking-items">
     <button class="tracking-items-change" name="changetheme">Change Theme</button>
 </div> -->