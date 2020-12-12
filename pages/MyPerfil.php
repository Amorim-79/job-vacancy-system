<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';
    $id = $_SESSION['id'];

    if ($user === 'candidates') {
        $rsCategories = listData($vConn, 'categories'); // Retorno da tabela de categorias
        $rsCandidateById = getCandidateById($vConn, $id); // Retorna os dados da empresa
        $tblCandidateById = mysqli_fetch_array($rsCandidateById); //extraindo os dados do resultSet
?>

<div class="container-fluid">
    <div class="row justify-content-md-center rounded bg-light shadow p-2">
        <form action="UpdateData.php" method="post">
            <h4 class="text-center font-weight-bold mt-3">Alterar Dados</h4>                     
            <div class="row mb-2">
                <div class="col-lg-8 form-group">
                    <label>E-mail:</label>
                    <input type="text" name="data[2]" class="form-control" value="<?=$tblCandidateById[2]?>" readonly="true">
                </div>
                <div class="col-lg-4 form-group">
                    <label>Senha:</label>
                    <input type="password" name="data[3]" class="form-control" value="<?=$tblCandidateById[3]?>">
                </div>    
            </div>       
            <div class="row mb-2">
                <div class="col-12 form-group">
                    <label>Nome: </label>
                    <input type="text" name="data[1]" class="form-control" maxlength="150" value="<?=$tblCandidateById[1]?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-5 form-group">
                    <label>Gênero: </label>
                    <select name="data[11]" class="form-control" value="<?=$tblCandidateById[11]?>">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="col-lg-2 form-group">
                    <label>Idade: </label>
                    <input type="text" name="data[10]" class="form-control" maxlength="3" value="<?=$tblCandidateById[10]?>">
                </div>
                <div class="col-lg-5">
                    <label>Área de Interesse: </label>
                    <select class="form-control" name="data[12]" value="<?=$tblCandidateById[12]?>">
                        <?php
                            while($tblCategories = mysqli_fetch_array($rsCategories)){
                        ?>
                            <option value="<?=$tblCategories[0]?>"><?=$tblCategories[1]?></option>        
                        <?php
                            }
                        ?>
                    </select>      
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <label>Endereço: </label>
                    <input type="text" name="data[8]" class="form-control" maxlength="80" value="<?=$tblCandidateById[8]?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4">
                    <label>Cidade: </label>
                    <input type="text" name="data[5]" class="form-control" maxlength="30" value="<?=$tblCandidateById[5]?>">
                </div>
                <div class="col-lg-2">
                    <label>UF: </label>
                    <input type="text" name="data[6]" class="form-control" maxlength="2" value="<?=$tblCandidateById[6]?>">
                </div>
                <div class="col-lg-3">
                    <label>País: </label>
                    <input type="text" name="data[7]" class="form-control" maxlength="30" value="<?=$tblCandidateById[7]?>">
                </div>
                <div class="col-lg-3">
                    <label>CEP: </label>
                    <input type="text" name="data[9]" class="form-control" maxlength="9" value="<?=$tblCandidateById[9]?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-6">
                    <label>Telefone: </label>
                    <input type="text" name="data[4]" class="form-control" maxlength="15" value="<?=$tblCandidateById[4]?>">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Salvar</button>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12">  
                    <input type="hidden" name="data[0]" value="<?=$tblCandidateById[0]?>">
                    <input type="hidden" name="data[13]" value="candidate">
                    <input type="hidden" name="user" value="candidates">
                    <input type="hidden" name="table" value="candidates">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    } else {
        $rsCompanyById = getCompanyById($vConn, $id); // Retorna os dados da empresa
        $tblCompanyById = mysqli_fetch_array($rsCompanyById); //extraindo os dados do resultSet
?>
    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <form action="UpdateData.php" method="post">
                <h4 class="text-center font-weight-bold mt-3">Alterar Dados</h4>
                <div class="row mb-2">
                    <div class="col-lg-8 form-group">
                        <label>E-mail:</label>
                        <input type="text" name="data[2]" class="form-control" value="<?=$tblCompanyById[2]?>" readonly="true">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label>Senha:</label>
                        <input type="password" name="data[3]" class="form-control" value="<?=$tblCompanyById[3]?>">
                    </div>    
                </div>                 
                <div class="row mb-2">
                    <div class="col-12 form-group">
                        <label>Nome: </label>
                        <input type="text" name="data[1]" class="form-control" maxlength="150" value="<?=$tblCompanyById[1]?>">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label>Endereço: </label>
                        <input type="text" name="data[8]" class="form-control" maxlength="80" value="<?=$tblCompanyById[8]?>">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4">
                        <label>Cidade: </label>
                        <input type="text" name="data[5]" class="form-control" maxlength="30" value="<?=$tblCompanyById[5]?>">
                    </div>
                    <div class="col-lg-2">
                        <label>UF: </label>
                        <input type="text" name="data[6]" class="form-control" maxlength="2" value="<?=$tblCompanyById[6]?>">
                    </div>
                    <div class="col-lg-3">
                        <label>País: </label>
                        <input type="text" name="data[7]" class="form-control" maxlength="30" value="<?=$tblCompanyById[7]?>">
                    </div>
                    <div class="col-lg-3">
                        <label>CEP: </label>
                        <input type="text" name="data[9]" class="form-control" maxlength="9" value="<?=$tblCompanyById[9]?>">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label>Telefone: </label>
                        <input type="text" name="data[4]" class="form-control" maxlength="15" value="<?=$tblCompanyById[4]?>">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Salvar</button>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-12">  
                        <input type="hidden" name="data[0]" value="<?=$tblCompanyById[0]?>">
                        <input type="hidden" name="data[10]" value="company">
                        <input type="hidden" name="user" value="companies">
                        <input type="hidden" name="table" value="companies">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
    }
?>