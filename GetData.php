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

function listYourVacancies($vConn, $idCandidates){

    $sqlData = "Select * from vacancies  inner join candidates_vacancy on candidates_vacancy.idVacancy = vacancies.idVacancy where idCandidates = $idCandidates";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listCandidatesVacancies($vConn, $idVacancy){

    $sqlData = "Select * from candidates inner join candidates_vacancy on candidates_vacancy.idCandidates = candidates.idCandidates where idVacancy = $idVacancy";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listCompaniesForCandidate($vConn, $idCandidate){

    $sqlData = "Select * from companies inner join candidates_vacancy on candidates_vacancy.idCompany = companies.idCompany where idCandidates = $idCandidate";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listCandidatesForCompany($vConn, $idCompany){

    $sqlData = "Select * from candidates inner join candidates_vacancy on candidates_vacancy.idCandidates = candidates.idCandidates where idCompany = $idCompany";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listMessagesSendByCompany($vConn, $idCompany){

    $sqlData = "Select messages.*, companies.name, candidates.name from messages, companies, candidates where messages.idCompany like '$idCompany' and messages.idOrigin like '$idCompany' and candidates.idCandidates like messages.idCandidate and companies.idCompany like messages.idCompany";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listMessagesSendByCandidate($vConn, $idCandidate){

    $sqlData = "Select messages.*, companies.name, candidates.name from messages, companies, candidates where messages.idCandidate like '$idCandidate' and messages.idOrigin like '$idCandidate' and candidates.idCandidates like messages.idCandidate and companies.idCompany like messages.idCompany";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listMessagesCompany($vConn, $idCompany){

    $sqlData = "Select messages.*, companies.name, candidates.name from messages, companies, candidates where messages.idCompany like '$idCompany' and messages.idOrigin <> '$idCompany' and candidates.idCandidates like messages.idCandidate and companies.idCompany like messages.idCompany";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function listMessagesCandidate($vConn, $idCandidate){

    $sqlData = "Select messages.*, companies.name, candidates.name from messages, companies, candidates where messages.idCandidate like '$idCandidate' and messages.idOrigin <> '$idCandidate' and candidates.idCandidates like messages.idCandidate and companies.idCompany like messages.idCompany";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));

    return $rsData;
}

/*----------------------------------------------------------------------------*/

function getVacancyById($vConn, $id){
    
    $sqlData = "Select * from vacancies where idVacancy like '$id'";
    $rsData = mysqli_query($vConn, $sqlData) or die(mysqli_error($vConn));
    
    return $rsData;
}

/*----------------------------------------------------------------------------*/
?>