<?php

include "Connection.php";

$user =  $_POST['user'];
$idVacancy =  $_POST['idVacancy'];
$idCandidate =  $_POST['idCandidate'];
$idCompany =  $_POST['idCompany'];

    
$sqlVacancy = "Select * from vacancies where idVacancy like '$idVacancy'";
$rsVacancy = mysqli_query($vConn, $sqlVacancy) or die(mysqli_error($vConn));
$tblVacancy = mysqli_fetch_array($rsVacancy);

$someCandidates = $tblVacancy['qtdCandidates'] . 1;
    
$sqlInsertCandidatesVacancy = "Insert into candidates_vacancy(idCandidates, idVacancy, idCompany)values($idCandidate, $idVacancy, $idCompany)";
mysqli_query($vConn, $sqlInsertCandidatesVacancy) or die(mysqli_error($vConn));
    
$sqlUpdateVacancy = "Update vacancies set qtdCandidates='$someCandidates' where idVacancy like '$idVacancy'";
mysqli_query($vConn, $sqlUpdateVacancy) or die(mysqli_error($vConn));

echo "<script>alert('Aplicado com sucesso');</script>";
echo "<script>location.href='index.php?user=$user&screen=panel';</script>";//redirecionando
?>

