<?php

if (isset($_POST['workoutsubmit'])) {
    include_once 'dbh.inc.php';
    $workoutname = mysqli_real_escape_string($connec, $_POST['exername']);
    $workoutweight = mysqli_real_escape_string($connec, $_POST['exerweight']);
    $workoutpart = mysqli_real_escape_string($connec, $_POST['exerpart']);
    $workoutreps = mysqli_real_escape_string($connec, $_POST['exerreps']);
    $workoutsets = mysqli_real_escape_string($connec, $_POST['exersets']);
    $workouttime = mysqli_real_escape_string($connec, $_POST['exertime']);
    // Check for Empty Fields
    if (empty($workoutname) || empty($workoutweight) || empty($workoutpart) || empty($workoutreps) || empty($workoutsets) || empty($workouttime)){
        header("Location: ../signedinContent.php?information=empty");
        exit();
    } else {
        // Insert the User into the Database
        $inexerdata = "INSERT INTO updatedexercisedata (exername, exerweight, exerpart, exerreps, exersets, exertime) VALUES ('$workoutname', '$workoutweight', '$workoutpart', '$workoutreps', '$workoutsets', '$workouttime');";
        mysqli_query($connec, $inexerdata);
        header("Location: ../signedinContent.php?information=success");
        exit();
    }
} else {
    header("Location: ../signedinContent.php");
    exit();
}