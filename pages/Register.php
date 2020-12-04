<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-8 border p-3 rounded bg-light shadow">
                    
            <?php
                if ($user === 'candidate') {
            ?>
                    <form action="InsertData.php" method="post">
                        <h4 class="text-center font-weight-bold mt-3">Cadastrar-se</h4>                     
                        <div class="row mb-2">
                            <div class="col-lg-8 form-group">
                                <label>E-mail:</label>
                                <input type="text" name="data[2]" class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Senha:</label>
                                <input type="password" name="data[3]" class="form-control">
                            </div>    
                        </div>       
                        <div class="row mb-2">
                            <div class="col-12 form-group">
                                <label>Nome: </label>
                                <input type="text" name="data[1]" class="form-control" maxlength="150">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6 form-group">
                                <label>Gênero: </label>
                                <select name="data[11]" class="form-control">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Idade: </label>
                                <input type="text" name="data[10]" class="form-control" maxlength="3">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label>Área de Interesse: </label>
                                <input type="text" name="data[12]" class="form-control" maxlength="30">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label>Endereço: </label>
                                <input type="text" name="data[8]" class="form-control" maxlength="80">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4">
                                <label>Cidade: </label>
                                <input type="text" name="data[5]" class="form-control" maxlength="30">
                            </div>
                            <div class="col-lg-2">
                                <label>UF: </label>
                                <input type="text" name="data[6]" class="form-control" maxlength="2">
                            </div>
                            <div class="col-lg-3">
                                <label>País: </label>
                                <input type="text" name="data[7]" class="form-control" maxlength="30">
                            </div>
                            <div class="col-lg-3">
                                <label>CEP: </label>
                                <input type="text" name="data[9]" class="form-control" maxlength="9">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label>Telefone: </label>
                                <input type="text" name="data[4]" class="form-control" maxlength="15">
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="?user=<?=$user?>&screen=login" class="link mt-3 float-left">Já possuo conta</a>
                            <button type="submit" class="btn btn-primary float-right">Criar conta</button>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">  
                                    <input type="hidden" name="data[0]" value=" ">
                                    <input type="hidden" name="data[13]" value="candidate">
                                    <input type="hidden" name="table" value="candidates">
                            </div>
                        </div>
                    </form>
            <?php
                } else {
            ?>
                          <form action="InsertData.php" method="post">
                        <h4 class="text-center font-weight-bold mt-3">Cadastrar-se</h4>
                        <div class="row mb-2">
                            <div class="col-lg-8 form-group">
                                <label>E-mail:</label>
                                <input type="text" name="data[2]" class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Senha:</label>
                                <input type="password" name="data[3]" class="form-control">
                            </div>    
                        </div>                 
                        <div class="row mb-2">
                            <div class="col-12 form-group">
                                <label>Nome: </label>
                                <input type="text" name="data[1]" class="form-control" maxlength="150">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label>Endereço: </label>
                                <input type="text" name="data[8]" class="form-control" maxlength="80">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4">
                                <label>Cidade: </label>
                                <input type="text" name="data[5]" class="form-control" maxlength="30">
                            </div>
                            <div class="col-lg-2">
                                <label>UF: </label>
                                <input type="text" name="data[6]" class="form-control" maxlength="2">
                            </div>
                            <div class="col-lg-3">
                                <label>País: </label>
                                <input type="text" name="data[7]" class="form-control" maxlength="30">
                            </div>
                            <div class="col-lg-3">
                                <label>CEP: </label>
                                <input type="text" name="data[9]" class="form-control" maxlength="9">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label>Telefone: </label>
                                <input type="text" name="data[4]" class="form-control" maxlength="15">
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="?user=<?=$user?>&screen=login" class="link mt-3 float-left">Já possuo conta</a>
                            <button type="submit" class="btn btn-primary float-right">Criar conta</button>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">  
                                    <input type="hidden" name="data[0]" value=" ">
                                    <input type="hidden" name="data[10]" value="company">
                                    <input type="hidden" name="table" value="companies">
                            </div>
                        </div>
                    </form>
            <?php
                    }
            ?>   
                    
        </div>
    </div>
</div>