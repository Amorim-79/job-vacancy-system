<?php
    session_start();
    
    $_SESSION['name'] = NULL;
    $_SESSION['loginTime'] = NULL;
    $_SESSION['permission'] = null;    
    $_SESSION['statusLogin'] = 0;   
    
    session_destroy();
    
    echo "<script>location.href='index.php';</script>";

?>

