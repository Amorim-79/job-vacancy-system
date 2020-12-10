<?php
    session_start();
    include 'components/NavBar.php';
    
    $readonly = $_GET['readonly'];

    if ($user === 'candidates') {
?>

    <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow w-100 h-75">
                <h5 class="card-header font-weight-bold text-center">Dev Frontend</h5>
                <div class="card-body shadow-sm h-100 col-12">
                    <h5 class="card-title text-center">Empresa dos Dev</h5>
                    <p class="card-text text-right mr-5">Salário: R$3200,00</p>
                    <p class="card-text">Atuar com desenvolvimento frontend bla bla bla.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text font-weight-bold small float-left">Candidaturas para a vaga: 0/50</p>
                    <?php
                        if ($readonly == 'false') {
                    ?>
                        <a href="#" class="btn btn-primary mr-3 float-right">Candidatar-se</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
    } else {
?>
   <div class="container-fluid">
        <div class="row justify-content-md-center rounded bg-light shadow p-2">
            <div class="card m-3 shadow w-100">
                <h5 class="card-header font-weight-bold text-center">Dev Frontend</h5>
                <div class="card-body col-12">
                    <h5 class="card-title text-center">Empresa dos Dev</h5>
                    <p class="card-text text-right mr-5">Salário: R$3200,00</p>
                </div>
                <div class="card-body mb-2 shadow-sm col-12">
                    <p class="card-text">Atuar com desenvolvimento frontend bla bla bla.</p>
                </div>
                <div class="card-body shadow-sm col-12">
                    <h5 class="card-title text-center">Candidatos para a vaga</h5>
                    <table class="table table-striped shadow-sm border">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cleitin Desenvolvedor</td>
                        <td>cleitin@email.com</td>
                        <td>119888-88888</td>
                    </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <p class="card-text font-weight-bold small float-right">Candidaturas para a vaga: 0/50</p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>