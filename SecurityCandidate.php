<?php
if($_SESSION['permission'] != 'candidate'){
     echo "<script>location.href='Logout.php';</script>";
}


if($_SESSION['statusLogin'] == 0){
     echo "<script>location.href='Logout.php';</script>";
}

?>