<?php

if ($_POST) {
    include "Connection.php";

    function listInputs($vConn, $table){
        $sqlInputs = "Show columns from $table";
        $rsInputs = mysqli_query($vConn, $sqlInputs) or die(mysqli_error($vConn));
            
        return $rsInputs;
    }

    $user = $_POST['user'];
        
    $dataForm = $_POST['data'];

    $table = $_POST['table'];
    $inputs = "";
    $rsInputs = listInputs($vConn, $table);
    $totalInputsBD = mysqli_num_rows($rsInputs);

    $sqlUpdate = "Update " . $table . " set ";

    $i = 0;
    while($inputsBD = mysqli_fetch_array($rsInputs)){
        if($i<count($dataForm)-1){
                $sqlUpdate .= $inputsBD[0] . " = " . "'$dataForm[$i]'" .  ", ";
        }else {
            $sqlUpdate .= $inputsBD[0] . " = " . "'$dataForm[$i]'";
        }    
        $i++;
    }//fechando while

    if ($table == 'candidates') {
        $sqlUpdate .= " where idCandidates like '" . $dataForm[0] . "'";
    } else if ($table == 'companies') {
        $sqlUpdate .= " where idCompany like '" . $dataForm[0] . "'";
    }

    mysqli_query($vConn, $sqlUpdate) or die(mysqli_error($vConn));

    echo "<script>alert('Atualizado com sucesso');</script>";
    echo "<script>location.href='index.php?user=$user&screen=panel';</script>";//redirecionando
}
?>