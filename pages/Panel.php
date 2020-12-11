<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';

    if ($user === 'candidates') {
        
        $rsVacanciesRecommended = listVacancyRecommended($vConn, $_SESSION['interest']); // Retorno de vagas da tabela vacancies como mesmo interesse do candidato
?>

<div class="container-fluid">
    <div class="row justify-content-md-center rounded bg-light shadow p-2">
        <div class="card m-3 col-sm-5 shadow" style="width: 18rem;">
            <img class="card-img-top mt-2" src="img/all-opportunities.jpg" alt="All job opportunities">
            <a href="index.php?user=<?=$user?>&screen=yourVacancy" class="p-2">
                <div class="card-body">
                    <p class="card-text">Visualizar vagas que você está participando.</p>
                    <i class="fa fa-arrow-right Icones float-right"></i>
                </div>
            </a>
        </div>

        <div class="card m-3 col-sm-5 h-50 shadow">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-center">Pesquisar vagas</h5>
                <form action="index.php?user=<?=$user?>&screen=listVacancy" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="params" placeholder="Pesquisar" aria-label="Pesquisar">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-primary">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card m-3 shadow">
            <h5 class="card-header font-weight-bold text-center">Vagas Recomendadas pra você</h5>
            <div class="card-body row justify-content-between">

                <?php
                    while($tblVacanciesRecommended = mysqli_fetch_array($rsVacanciesRecommended)){
                        if ($tblVacanciesRecommended[8] < $tblVacanciesRecommended[7]) {
                ?>
                    <div class="card m-3 col-sm-5 shadow-sm border" style="height: 250px;">
                        <div class="card-body" style="height: 250px;">
                            <h5 class="card-title"><?=$tblVacanciesRecommended[3]?></h5>
                            <p class="card-text text-truncate"><?=$tblVacanciesRecommended[4]?></p>
                        </div>
                        <div class="card-footer row justify-content-between">
                            <p class="card-text small float-left">Quantidade de candidatos aplicados: <?=$tblVacanciesRecommended[8]?>/<?=$tblVacanciesRecommended[7]?></p>
                            <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false&id=<?=$tblVacanciesRecommended[0]?>" class="btn btn-primary float-right">Visualizar</a>
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
    } else {
        $rsVacanciesCompany = listVacancyCompany($vConn, $_SESSION['id']); // Retorno de vagas da tabela vacancies
?>
    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 col-6 shadow">
                <img class="card-img-top mt-2" src="img/new-job.jpg" alt="All job opportunities">
                <a href="index.php?user=<?=$user?>&screen=createVacancy" class="p-2">
                    <div class="card-body">
                        <p class="card-text">Divulgar novas vagas.</p>
                        <i class="fa fa-arrow-right Icones float-right"></i>
                    </div>
                </a>
            </div>

            <div class="card m-3 shadow">
                <h5 class="card-header font-weight-bold text-center">Vagas Divulgadas</h5>
                <div class="card-body row justify-content-between">

                    <?php
                        while($tblVacanciesCompany = mysqli_fetch_array($rsVacanciesCompany)){
                    ?>
                        <div class="card m-3 col-sm-5 shadow-sm border" style="height: 250px;">
                            <div class="card-body" style="height: 250px;">
                                <h5 class="card-title"><?=$tblVacanciesCompany[3]?></h5>
                                <p class="card-text text-truncate"><?=$tblVacanciesCompany[4]?></p>
                            </div>
                            <div class="card-footer row justify-content-between">
                                <p class="card-text small float-left">Quantidade de candidatos aplicados: <?=$tblVacanciesCompany[8]?>/<?=$tblVacanciesCompany[7]?></p>
                                <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true&id=<?=$tblVacanciesCompany[0]?>" class="btn btn-primary float-right">Visualizar</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>