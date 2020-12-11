<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';

    if ($user === 'candidates') {

        $params = $_POST['params'];

        $rsVacanciesSearch = listVacancySearch($vConn, $params); // Retorna as vagas resultante da busca feita pelo candidato
?>

    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow">
                <h5 class="card-header font-weight-bold text-center">Vagas</h5>
                <div class="card-body row justify-content-between">

                    <?php
                        while($tblVacanciesSearch = mysqli_fetch_array($rsVacanciesSearch)){
                            if ($tblVacanciesSearch[8] < $tblVacanciesSearch[7]) {
                    ?>
                        <div class="card m-3 col-sm-5 shadow-sm border" style="height: 250px;">
                            <div class="card-body" style="height: 250px;">
                                <h5 class="card-title"><?=$tblVacanciesSearch[2]?></h5>
                                <p class="card-text text-truncate"><?=$tblVacanciesSearch[3]?></p>
                            </div>
                            <div class="card-footer row justify-content-between">
                                <p class="card-text small float-left">Quantidade de candidatos aplicados: <?=$tblVacanciesSearch[8]?>/<?=$tblVacanciesSearch[7]?></p>
                                <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false&id=<?=$tblVacanciesSearch[0]?>" class="btn btn-primary float-right">Visualizar</a>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
    }
?>