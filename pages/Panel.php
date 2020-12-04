<?php
    session_start();
    include 'components/NavBar.php';

    if ($user === 'candidates') {
?>

<div class="container-fluid">
    <div class="row justify-content-md-center rounded bg-light shadow p-2">
        <div class="card m-3 col-sm-5 shadow" style="width: 18rem;">
            <img class="card-img-top mt-2" src="img/all-opportunities.jpg" alt="All job opportunities">
            <a href="" class="p-2">
                <div class="card-body">
                    <p class="card-text">Visualizar vagas que você está participando.</p>
                    <i class="fa fa-arrow-right Icones float-right"></i>
                </div>
            </a>
        </div>

        <div class="card m-3 col-sm-5 h-50 shadow">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-center">Pesquisar vagas</h5>
                <p class="card-text small">Procurar vagas de acordo com a área de interesse.</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Área de interesse" aria-label="Área de interesse">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button">Buscar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-3 shadow">
            <h5 class="card-header font-weight-bold text-center">Vagas Recomendadas para você</h5>
            <div class="card-body row">
                <div class="m-2 col-sm-5">
                    <h5 class="card-title">Dev Frontend</h5>
                    <p class="card-text">Atuar com desenvolvimento frontend.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
                <div class="m-2 col-sm-5">
                    <h5 class="card-title">Dev Frontend</h5>
                    <p class="card-text">Atuar com desenvolvimento frontend.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
                <div class="m-2 col-sm-5">
                    <h5 class="card-title">Dev Frontend</h5>
                    <p class="card-text">Atuar com desenvolvimento frontend.</p>
                    <a href="#" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    } else {
?>
    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 col-6 shadow">
                <img class="card-img-top mt-2" src="img/new-job.jpg" alt="All job opportunities">
                <a href="" class="p-2">
                    <div class="card-body">
                        <p class="card-text">Divulgar novas vagas.</p>
                        <i class="fa fa-arrow-right Icones float-right"></i>
                    </div>
                </a>
            </div>

            <div class="card m-3 shadow">
                <h5 class="card-header font-weight-bold text-center">Vagas Divulgadas</h5>
                <div class="card-body row justify-content-between">
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text medium">Atuar com desenvolvimento frontend.</p>
                        <p class="card-text small">Quantidade de candidatos aplicados: 20/50</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <p class="card-text small">Quantidade de candidatos aplicados: 20/50</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <p class="card-text small">Quantidade de candidatos aplicados: 20/50</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>