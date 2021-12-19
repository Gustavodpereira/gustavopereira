<?php
include_once("../db/conexao.php");

$_iduser = $_POST['iduser'];

$_sql = "DELETE FROM aluno WHERE id = '$_iduser'" ;

$_query = mysqli_query($_conexao,$_sql) or die (mysqli_error()); //query se torna uma variavel logica V OU F

if( $_query)
{
	header("location:../html/sucesso.html");
}
else
{
	header("location:../html/falhou.html");
}


?>