<?php

include "Connection.php";

function listData($vConn, $table){
    
    $sqlData = "Select * from $table";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listInputs($vConn, $table){
    $sqlInputs = "Show columns from $table";
    $rsInputs = mysqli_query($vConn, $sqlInputs) or die(mysqli_error($vConn));
    
    return $rsInputs;
}

/*----------------------------------------------------------------------------*/
?>

