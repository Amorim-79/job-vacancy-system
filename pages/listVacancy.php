<?php
    session_start();
    include 'components/NavBar.php';

    if ($user === 'candidates') {
?>

    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow">
                <h5 class="card-header font-weight-bold text-center">Vagas</h5>
                <div class="card-body row justify-content-between">
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=false" class="btn btn-primary">Visualizar</a>
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
            <div class="card m-3 shadow">
                <h5 class="card-header font-weight-bold text-center">Todas as vagas divulgadas</h5>
                <div class="card-body row justify-content-between">
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true" class="btn btn-primary">Visualizar</a>
                    </div>
                    <div class="m-2 col-sm-5">
                        <h5 class="card-title">Dev Frontend</h5>
                        <p class="card-text">Atuar com desenvolvimento frontend.</p>
                        <a href="index.php?user=<?=$user?>&screen=vacancy&readonly=true" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>