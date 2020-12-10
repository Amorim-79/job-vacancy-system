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

    $emailUser = $_POST['HTML_email'];
    $passwordUser = $_POST['HTML_password'];
            

    $sqlLogin = "Select * from $user where email like '$emailUser' and ";
    $sqlLogin .= "Password like '$passwordUser'";


    $rsLogin = mysqli_query($vConn, $sqlLogin) or die(mysqli_error($vConn));


    if(mysqli_num_rows($rsLogin) > 0){
        $loginData = mysqli_fetch_array($rsLogin);
        
        //Abrindo sessão
        if ($user == 'candidates') {
            $_SESSION['id'] = $loginData['idCandidates'];
            $_SESSION['interest'] = $loginData['interest'];
        } else if ($user == 'companies') {
            $_SESSION['id'] = $loginData['idCompany'];
        }

        $_SESSION['name'] = $loginData['name'];
        $_SESSION['loginTime'] = "Acesso em " . date("d/m/Y") . " às " . date("H:i:s");
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