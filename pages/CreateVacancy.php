<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';

    $rsCategories = listData($vConn, 'categories'); // Retorno da tabela de categorias

?>

<div class="container-fluid">
    <div class="row justify-content-md-center rounded bg-light shadow p-2">
        <div class="card m-3 col-8 h-50 shadow">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-center">Cadastrar nova vaga</h5>
                <p class="card-text small">Preencha os dados da vaga a ser divulgada.</p>
                <form action="InsertData.php" method="post">
                    <div class="row mb-2">
                        <div class="form-group col-12">
                            <label>Cargo: </label>
                            <input type="text" class="form-control" placeholder="Cargo" name="data[2]">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 form-group">
                            <label>Área: </label>
                            <select class="form-control" name="data[5]">
                                <?php
                                    while($tblCategories = mysqli_fetch_array($rsCategories)){
                                ?>
                                <option value="<?=$tblCategories[0]?>"><?=$tblCategories[1]?></option>
                                
                                <?php
                                    }
                                ?>
                            </select>      
                        </div>
                        <div class="col-6 form-group">
                            <label>Salário: </label>
                            <input type="number" class="form-control" placeholder="Salário" name="data[4]">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-12">
                            <textarea class="form-control" rows="15" style="resize: none; line-height: 20px; font-size: 14px;" maxlength="1000" placeholder="Descrição da vaga" name="data[3]"></textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-6">
                            <label>Máx. de candidatos permitidos: </label>
                            <input type="number" class="form-control" placeholder="Nº de vagas" name="data[6]">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="data[0]" value=" ">
                        <input type="hidden" name="data[1]" value="<?=$_SESSION['id'];?>">
                        <input type="hidden" name="user" value="<?=$user?>">
                        <input type="hidden" name="table" value="vacancies">
                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>