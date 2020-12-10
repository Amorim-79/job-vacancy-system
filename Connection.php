<?php

$servidorBD = "localhost";
$usuarioBD = "root";
$senhaBD = "";
$nomeBD = "job-vacancy";

$vConn = mysqli_connect($servidorBD, $usuarioBD, $senhaBD, $nomeBD);
mysqli_set_charset($vConn, "utf8");

?>