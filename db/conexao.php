<?php


$_host      = "localhost:3308";
$_user      = "root";
$_password  = "";
$_database  = "escola";

$_conexao = mysqli_connect($_host ,$_user, $_password) or die (mysqli_error());

mysqli_select_db($_conexao,$_database) or die (mysqli_error());

?>