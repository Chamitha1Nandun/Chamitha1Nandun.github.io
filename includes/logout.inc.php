<?php

    if(isset($_POST['out'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
        
        echo 'index.php';
        
    }

?>