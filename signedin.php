<?php
    if (isset($_SESSION['u_id'])) {
        echo include_once 'signedinContent.php';
    } else {
        echo include_once 'mainPageContent.php';
    }
    

    
