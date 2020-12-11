<?php
    session_start();
    include 'components/NavBar.php';
    include 'GetData.php';

    
    if ($user === 'candidates') {
        $idCandidate = $_SESSION['id'];
        
        $rsCompaniesForCandidate = listCompaniesForCandidate($vConn, $idCandidate); // Retorna as empresa que o candidato esta participando das vagas
        $rsMessagesSendByCandidate = listMessagesSendByCandidate($vConn, $idCandidate); // Retorna as todas as mensagens enviadas pelo candidato
        $rsMessagesCandidate = listMessagesCandidate($vConn, $idCandidate); // Retorna as todas as mensagens recebidas pelo candidato

?>

<div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 col-8 h-50 shadow">
                <form action="InsertData.php" method="post">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-center">Nova mensagem</h5>
                        <p class="card-text small">Entre em contato com empresa que você está participando de processos seletivos.</p>
                        <div class="row mb-2">
                                <div class="col-12 form-group">
                                    <label>Destinatário: </label>
                                    <select class="form-control" name="data[2]">
                                        <?php
                                            while($tblCompaniesForCandidate = mysqli_fetch_array($rsCompaniesForCandidate)){
                                        ?>
                                        <option value="<?=$tblCompaniesForCandidate[0]?>"><?=$tblCompaniesForCandidate[1]?></option>
                                        
                                        <?php
                                            }
                                        ?>
                                    </select> 
                                </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-12">
                                <textarea class="form-control" rows="8" style="resize: none;" maxlength="255" name="data[3]" placeholder="Escreva a mensagem"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="data[0]" value=" ">
                            <input type="hidden" name="data[1]" value="<?=$idCandidate?>">
                            <input type="hidden" name="data[4]" value="<?=date('Y-m-d H:i:s')?>">
                            <input type="hidden" name="data[5]" value="<?=$idCandidate?>">
                            <input type="hidden" name="user" value="<?=$user?>">
                            <input type="hidden" name="table" value="messages">
                            <button type="submit" class="btn btn-primary float-right">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

           <div class="card m-3 col-8 shadow" style="overflow-y: scroll; overflow-x: hidden; height: 400px;">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens recebidas</h5>
                <div class="card-body row">
                
                    <?php
                        while($tblMessagesCandidate = mysqli_fetch_array($rsMessagesCandidate)){
                    ?>
                       <div class="mb-4 col-12">
                            <h5 class="card-title"><?=$tblMessagesCandidate[6]?></h5>
                            <h5 class="card-text small float-right"><?=date("d-m-Y H:m:s", strtotime($tblMessagesCandidate[4]))?></h5>
                            <p class="card-text small"><?=$tblMessagesCandidate[3]?></p>
                            <a href="#" class="btn btn-primary">Responder</a>
                        </div>
                                        
                    <?php
                        }
                    ?>

                </div>
            </div>

           <div class="card m-3 col-8 shadow" style="overflow-y: scroll; overflow-x: hidden; height: 400px;">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens enviadas</h5>
                <div class="card-body row">

                    <?php
                        while($tblMessagesSendByCandidate = mysqli_fetch_array($rsMessagesSendByCandidate)){
                    ?>
                        <div class="mb-4 col-12">
                            <h5 class="card-title"><?=$tblMessagesSendByCandidate[6]?></h5>
                            <h5 class="card-text small float-right"><?=date("d-m-Y H:m:s", strtotime($tblMessagesSendByCandidate[4]))?></h5>
                            <p class="card-text small"><?=$tblMessagesSendByCandidate[3]?></p>
                            <a href="#" class="btn btn-primary">Responder</a>
                        </div>
                                        
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
    } else {
        $idCompany = $_SESSION['id'];

        $rsCandidatesForCompany = listCandidatesForCompany($vConn, $idCompany); // Retorna as empresa que o candidato esta participando das vagas
        $rsMessagesSendByCompany = listMessagesSendByCompany($vConn, $idCompany); // Retorna as todas as mensagens enviadas pela empresa
        $rsMessagesCompany = listMessagesCompany($vConn, $idCompany); // Retorna as todas as mensagens recebidas pela empresa

?>
    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 col-8 h-50 shadow">
                <form action="InsertData.php" method="post">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-center">Nova mensagem</h5>
                        <p class="card-text small">Entre em contato com candidatos que estão participando de seus processos seletivos.</p>
                        <div class="row mb-2">
                                <div class="col-12 form-group">
                                    <label>Destinatário: </label>
                                    <select class="form-control" name="data[1]">
                                        <?php
                                            while($tblCandidatesForCompany = mysqli_fetch_array($rsCandidatesForCompany)){
                                        ?>
                                        <option value="<?=$tblCandidatesForCompany[0]?>"><?=$tblCandidatesForCompany[1]?></option>
                                        
                                        <?php
                                            }
                                        ?>
                                    </select> 
                                </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-12">
                                <textarea class="form-control" rows="8" style="resize: none;" maxlength="255" name="data[3]" placeholder="Escreva a mensagem"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="data[0]" value=" ">
                            <input type="hidden" name="data[2]" value="<?=$idCompany?>">
                            <input type="hidden" name="data[4]" value="<?=date('Y-m-d H:i:s')?>">
                            <input type="hidden" name="data[5]" value="<?=$idCompany?>">
                            <input type="hidden" name="user" value="<?=$user?>">
                            <input type="hidden" name="table" value="messages">
                            <button type="submit" class="btn btn-primary float-right">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card m-3 col-8 shadow" style="overflow-y: scroll; overflow-x: hidden; height: 400px;">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens recebidas</h5>
                <div class="card-body row">
                
                    <?php
                        while($tblMessagesCompany = mysqli_fetch_array($rsMessagesCompany)){
                    ?>
                        <div class="mb-4 col-12">
                            <h5 class="card-title"><?=$tblMessagesCompany[7]?></h5>
                            <h5 class="card-text small float-right"><?=date("d-m-Y H:m:s", strtotime($tblMessagesCompany[4]))?></h5>
                            <p class="card-text small"><?=$tblMessagesCompany[3]?></p>
                            <a href="#" class="btn btn-primary">Responder</a>
                        </div>
                                        
                    <?php
                        }
                    ?>

                </div>
            </div>

            <div class="card m-3 col-8 shadow" style="overflow-y: scroll; overflow-x: hidden; height: 400px;">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens enviadas</h5>
                <div class="card-body row">

                    <?php
                        while($tblMessagesSendByCompany = mysqli_fetch_array($rsMessagesSendByCompany)){
                    ?>
                        <div class="mb-4 col-12">
                            <h5 class="card-title"><?=$tblMessagesSendByCompany[7]?></h5>
                            <h5 class="card-text small float-right"><?=date("d-m-Y H:m:s", strtotime($tblMessagesSendByCompany[4]))?></h5>
                            <p class="card-text small"><?=$tblMessagesSendByCompany[3]?></p>
                            <a href="#" class="btn btn-primary">Responder</a>
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