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

function listVacancyCompany($vConn, $Id){
    
    $sqlData = "Select * from vacancies where idCompany like '$Id'";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listVacancyRecommended($vConn, $interest){
    
    $sqlData = "Select * from vacancies where interest like '$interest'";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listVacancySearch($vConn, $params){
    
    $sqlData = "Select * from vacancies where concat_ws( '', description, name ) like '%$params%'";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/
?>

