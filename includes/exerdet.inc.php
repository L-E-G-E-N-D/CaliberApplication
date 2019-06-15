<?php
if ( ! empty($_POST)) {
    include 'dbh.inc.php';
    $mysqli = new mysqli('localhost','root','','exerdata');
    if ($mysqli->connect_error) {
        die('Connect Error: '.$mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    $sql = "INSERT INTO updatedexercisedata ( exername,exerweight,exerpart,exerreps,exersets,exertime ) VALUES ( '{$mysqli->real_escape_string($_POST['ExerName'])}', '{$mysqli->real_escape_string($_POST['ExerWeight'])}', '{$mysqli->real_escape_string($_POST['ExerPart'])}', '{$mysqli->real_escape_string($_POST['ExerReps'])}', '{$mysqli->real_escape_string($_POST['ExerSets'])}', '{$mysqli->real_escape_string($_POST['ExerTime'])}' )";
    $insert = $mysqli->query($sql);

    if( $insert ) {
        $sqlpublish = "SELECT * FROM updatedexercisedata;";
        $publishresult = mysqli_query($connec, $sqlpublish);
        $resultcheck = mysqli_num_rows($publishresult);
        if ($resultcheck > 0) {
            while ($publishrow = mysqli_fetch_assoc($publishresult)) {
                echo "<tr class='name_row'><th>" . $publishrow["exername"] ."</th><th>" .$publishrow["exerweight"] ."</th><th>" .$publishrow["exerpart"] ."</th><th>" .$publishrow["exerreps"] ."</th><th>" .$publishrow["exersets"] ."</th><th>" .$publishrow["exertime"] ."</th></tr>";
                echo "Success! Row ID: {$mysqli->insert_id}";
            }
        }
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    $mysqli->close();
}