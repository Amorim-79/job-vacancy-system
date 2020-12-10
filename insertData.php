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

        //montando campos na string SQL
        $cont=1;
        while($tableInputs = mysqli_fetch_array($rsInputs)){    
            if ($cont < $totalInputsBD) {
                $inputs .= $tableInputs[0] . ", ";
            } else {
                $inputs .= $tableInputs[0]; 
            }
            $cont++;
        }
    
    //montando valores na String SQL
    $values = "";
    for($i=0; $i<count($dataForm);$i++){
        if($i < count($dataForm) - 1) {
            $values .= "'" . $dataForm[$i] . "', ";
        } 
        else {
            $values .= "'" . $dataForm[$i]  . "'";
        }
    }

    $sqlInsert = "Insert into $table($inputs)values($values)";

    mysqli_query($vConn, $sqlInsert) or die(mysqli_error($vConn));

    if ($table == 'companies' || $table === 'candidates') {
        echo "<script>alert('Cadastrado com sucesso');</script>";
        echo "<script>location.href='index.php';</script>";//redirecionando

    } else if ($table == 'messages') {
        echo "<script>alert('Mensagem enviada com sucesso');</script>";
        echo "<script>location.href='index.php?user=$user&screen=inbox';</script>";//redirecionando

    } else if ($table == 'vacancies') {
        echo "<script>alert('Vaga cadastrada com sucesso');</script>";
        echo "<script>location.href='index.php?user=$user&screen=panel';</script>";//redirecionando
    }

}
?>