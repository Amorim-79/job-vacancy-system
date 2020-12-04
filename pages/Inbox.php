<?php
    session_start();
    include 'components/NavBar.php';

    if ($user === 'candidates') {
?>

<div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 col-8 h-50 shadow">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">Nova mensagem</h5>
                    <p class="card-text small">Entre em contato com empresa que você está participando de processos seletivos.</p>
                    <div class="row mb-2">
                            <div class="col-12 form-group">
                                <label>Destinatário: </label>
                                <select name="data[11]" class="form-control">
                                    <option value="M">Empresa 1</option>
                                    <option value="F">Empresa 2</option>
                                </select>
                            </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-12">
                            <textarea class="form-control" rows="8" style="resize: none;" maxlength="255" placeholder="Escreva a mensagem"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                    </div>
                </div>
            </div>

            <div class="card m-3 col-8 shadow">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens recebidas</h5>
                <div class="card-body row">
                    <div class="mb-4 col-12">
                        <h5 class="card-title">Nome da Empresa</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
                    </div>
                    <div class="mb-4 col-12 bg-white">
                        <h5 class="card-title">Nome da Empresa</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
                    </div>
                    <div class="mb-4 col-12">
                        <h5 class="card-title">Nome da Empresa</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
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
            <div class="card m-3 col-8 h-50 shadow">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">Nova mensagem</h5>
                    <p class="card-text small">Entre em contato com candidatos que estão participando de seus processos seletivos.</p>
                    <div class="row mb-2">
                            <div class="col-12 form-group">
                                <label>Destinatário: </label>
                                <select name="data[11]" class="form-control">
                                    <option value="M">Candidato 1</option>
                                    <option value="F">Candidato 2</option>
                                </select>
                            </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-12">
                            <textarea class="form-control" rows="8" style="resize: none;" maxlength="255" placeholder="Escreva a mensagem"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                    </div>
                </div>
            </div>

            <div class="card m-3 col-8 shadow">
                <h5 class="card-title mt-3 font-weight-bold text-center">Mensagens recebidas</h5>
                <div class="card-body row">
                    <div class="mb-4 col-12">
                        <h5 class="card-title">Nome do candidato</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
                    </div>
                    <div class="mb-4 col-12 bg-white">
                        <h5 class="card-title">Nome do candidato</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
                    </div>
                    <div class="mb-4 col-12">
                        <h5 class="card-title">Nome do candidato</h5>
                        <p class="card-text small">Corpo da mensagem.</p>
                        <a href="#" class="btn btn-primary">Responder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>