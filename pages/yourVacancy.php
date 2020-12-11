<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';

    $idCandidate = $_SESSION['id'];

    $rsYourVacancies = listYourVacancies($vConn, $idCandidate); // Retorna todas as vagas em que o candidato esteja aplicado

?>

<div class="container-fluid">
    <div class="row justify-content-md-center rounded bg-light shadow p-2">
        <div class="card m-3 shadow col-10">
            <h5 class="card-header font-weight-bold text-center bg-white">Vagas</h5>
            <div class="card-body row justify-content-between">

                <?php
                    while($tblYourVacancies = mysqli_fetch_array($rsYourVacancies)){
                ?>
                    <div class="card m-3 col-sm-5 shadow-sm border" style="height: 250px;">
                        <div class="card-body" style="height: 250px;">
                            <h5 class="card-title"><?=$tblYourVacancies[3]?></h5>
                            <p class="card-text text-truncate"><?=$tblYourVacancies[4]?></p>
                        </div>
                        <div class="card-footer row justify-content-between">
                            <p class="card-text small float-left">Quantidade de candidatos aplicados: <?=$tblYourVacancies[8]?>/<?=$tblYourVacancies[7]?></p>
                            <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true&id=<?=$tblYourVacancies[0]?>" class="btn btn-primary float-right">Visualizar</a>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>