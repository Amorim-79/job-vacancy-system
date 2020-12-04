<nav class="navbar navbar-expand-lg rounded-pill bg-secondary p-1 mb-n2">
    <div class="collapse navbar-collapse justify-content-between">
        
        <div class="nav navbar-brand col-lg-1">
            
            <a href="?user=<?=$user?>&screen=panel" class="text-light">                                
                <font class="m-3">
                    <i class="fa fa-home fa-2x Icones"></i>
                </font>
            </a>
        </div>  
        
        <div class="navbar-nav col-lg-2 justify-content-md-center">
            <a href="?user=<?=$user?>&screen=inbox" class="text-light">
                <font class="m-3">
                <i class="fa fa-envelope fa-md"></i>
                    Mensagens
                </font>
            </a>
        </div>  
        
        <div class="col-lg-3 justify-content-md-center text-white text-center">
            <font class="small">
            Olá, <?=$_SESSION['name'];?>             
            <br>
            <?=$_SESSION['loginTime'];?>             
            </font>
        </div> 
        
        <div class="navbar-nav col-lg-1 justify-content-md-center">
            <a href="index.php" class="text-light">                
                <font class="m-2">
                    <i class="fa fa-sign-out fa-2x"></i>                    
                </font>
            </a>
        </div>  
        
    </div>    
</nav>
