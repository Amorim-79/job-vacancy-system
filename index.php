<html>
    <head>
        <meta charset="utf-8">
        <title>Job Vacancy System</title>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    
    <body>
        <div class="container-fluid w-75 mt-3 mb-3">
            <?php
                if (!isset($_GET["user"])) { //se a variavel URL user nao existir (monta a landing page)            
            ?>

                <div class="row justify-content-md-center">
                <h1 class="mb-5 font-weight-bold text-white col-12 text-center">Employment Opportunities</h1>
                <img class="img-fluid" src="img/undraw_job_offers_kw5d.svg" alt="Landing logo">
                </div>
                <div class="row justify-content-around mt-3">
                    <a href="index.php?user=candidates&screen=login" class="btn btn-lg btn-primary">Entrar como candidato</a>
                    <a href="index.php?user=companies&screen=login" class="btn btn-lg btn-light">Entrar como empresa</a>
                </div>

            <?php
                } else {
                    include 'Routes.php';
                }
            ?>
        </div>
    </body>
</html>


