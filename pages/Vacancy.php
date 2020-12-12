<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';
    
    $readonly = $_GET['readonly'];
    $id = $_GET['id'];

    $rsVacancy = getVacancyById($vConn, $id); // Retorno por Id na tabela de vacancy
    $tblVacancy = mysqli_fetch_array($rsVacancy); //extraindo os dados do resultSet

    if ($user === 'candidates') {
?>

    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow w-100 h-75">
                <h5 class="card-header font-weight-bold text-center"><?=$tblVacancy['name']?></h5>
                <div class="card-body shadow-sm h-100 col-12">
                    <h5 class="card-title text-center"><?=$tblVacancy['nameCompany']?></h5>
                    <p class="card-text text-right mr-5">Salário: R$<?=$tblVacancy['salary']?></p>
                    <p class="card-text text-left">Endereço: <?=$tblVacancy['address']?>, <?=$tblVacancy['city']?> - <?=$tblVacancy['uf']?>, <?=$tblVacancy['country']?>, <?=$tblVacancy['postalCode']?></p>
                    <p class="card-text"><?=$tblVacancy['description']?></p>
                </div>
                <div class="card-footer">
                    <p class="card-text font-weight-bold small float-left">Candidaturas para a vaga: <?=$tblVacancy['qtdCandidates']?>/<?=$tblVacancy['maxCandidates']?></p>
                    <?php
                        if ($readonly == 'false') {
                    ?>
                        <form action="ApplyVacancy.php" method="post">
                            <input type="hidden" name="user" value="<?=$user?>">
                            <input type="hidden" name="idVacancy" value="<?=$tblVacancy['idVacancy']?>">
                            <input type="hidden" name="idCandidate" value="<?=$_SESSION['id']?>">
                            <input type="hidden" name="idCompany" value="<?=$tblVacancy['idCompany']?>">
                            <button type="submit" class="btn btn-primary mr-3 float-right">Candidatar-se</button>
                        </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
    } else {
        $rsCandidatesVacancies = listCandidatesVacancies($vConn, $id); // Retorna todos os candidatos da vaga selecionada

?>
   <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow w-100">
                <h5 class="card-header font-weight-bold text-center"><?=$tblVacancy['name']?></h5>
                <div class="card-body col-12">
                    <h5 class="card-title text-center"><?=$tblVacancy['nameCompany']?></h5>
                    <p class="card-text text-right mr-5">Salário: R$<?=$tblVacancy['salary']?></p>
                    <p class="card-text text-left">Endereço: <?=$tblVacancy['address']?>, <?=$tblVacancy['city']?> - <?=$tblVacancy['uf']?>, <?=$tblVacancy['country']?>, <?=$tblVacancy['postalCode']?></p>
                </div>
                <div class="card-body mb-2 shadow-sm col-12">
                    <p class="card-text"><?=$tblVacancy['description']?></p>
                </div>
                <div class="card-body shadow-sm col-12">
                    <h5 class="card-title text-center">Candidatos para a vaga</h5>

                    <?php
                        while($tblCandidatesVacancies = mysqli_fetch_array($rsCandidatesVacancies)){
                    ?>
                        <table class="table table-striped shadow-sm border">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Gênero</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">UF</th>
                                <th scope="col">País</th>
                            </tr>
                            <tr>
                                <th scope="row"><?=$tblCandidatesVacancies[0]?></th>
                                <td scope="row"><?=$tblCandidatesVacancies[1]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[2]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[4]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[10]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[11]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[8]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[5]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[6]?></td>
                                <td scope="row"><?=$tblCandidatesVacancies[7]?></td>
                            </tr>
                    </table>
                    <?php
                        }
                    ?>
                </div>
                <div class="card-footer">
                    <p class="card-text font-weight-bold small float-right">Candidaturas para a vaga: <?=$tblVacancy['qtdCandidates']?>/<?=$tblVacancy['maxCandidates']?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>