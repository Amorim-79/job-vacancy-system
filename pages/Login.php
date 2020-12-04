<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-6 border p-3 rounded bg-light shadow">
                    
            <form action="index.php?user=<?=$user?>&screen=login" method="post">
                <h4 class="text-center font-weight-bold mt-3">Conectar-se</h4>                     
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="text" name="HTML_email" class="form-control">
                </div>
                        
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="HTML_password" class="form-control">
                </div>    
                <div class="form-group">
                    <a href="?user=<?=$user?>&screen=register" class="link mt-3 float-left">Ainda não possuo conta</a>
                    <button type="submit" class="btn btn-primary float-right">Acessar Sistema</button>
                </div>
            </form>   
                    
        </div>
    </div>
</div>

<?php

if ($_POST) {
    //definindo fuso horario
    date_default_timezone_set('America/Sao_Paulo');


    session_start(); //permite o uso de sessões.
    include "Connection.php";

    //Acessando(POST) as variaveis de form HTML e jogando nas variaveis PHP
    $emailUser = $_POST['HTML_email'];
    $passwordUser = ($_POST['HTML_password']); //criptografia md5
            

    //montagem da instrução SQL para o login (variaveis PHP)
    $sqlLogin = "Select * from $user where email like '$emailUser' and ";
    $sqlLogin .= "Password like '$passwordUser'";


    //executando o SELECT e armazenando o retorno em um resultSet (rs)
    $rsLogin = mysqli_query($vConn, $sqlLogin) or die(mysqli_error($vConn));


    //mysqli_num_rows (retorna o numero de registros do select)
    if(mysqli_num_rows($rsLogin) > 0){
        //abertura do resultSet para acesso aos dados
        $loginData = mysqli_fetch_array($rsLogin);
        
        //Abrindo sessão
        $_SESSION['name'] = $loginData['name'];
        $_SESSION['loginTime'] = "Acesso em " . date("d/m/Y") . " às " . date("h:i:s");
        $_SESSION['permission'] = $loginData['permission'];    
        $_SESSION['statusLogin'] = 1;
        
        echo "<script>location.href='index.php?user=$user&screen=panel';</script>";
        
    }else{
        //alerta de mensagem 
        $_SESSION['statusLogin'] = 0;
        
        echo "<script>alert('Dados inválidos!');</script>";
    }
}
?>