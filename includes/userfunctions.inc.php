<?php
require("signup.inc.php");
function getUsersData($first) {
    $userarray = array();
    $userquery = mysql_query("SELECT * FROM 'users' WHERE 'user_first'='".$first."'");
    while($r = mysql_fetch_assoc($userquery)) {
        $userarray['user_first'] = $r['user_first'];
        $userarray['user_last'] = $r['user_last'];
        $userarray['user_email'] = $r['user_email'];
        $userarray['user_uid'] = $r['user_uid'];
        $userarray['user_pwd'] = $r['user_pwd'];
    }
    return $userarray;
}

function getUserFirst($uid) {
    $userquery = mysql_query("SELECT 'user_first' FROM 'users' WHERE 'user_uid'='".$uid."'");
    while($r = mysql_fetch_assoc($userquery)) {
        return $r['user_first'];
    }
}