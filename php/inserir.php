<?php
include_once("../db/conexao.php");

$_nomee  = $_POST['nome'];
$_emaill  = $_POST['email'];

//$_password = md5($_password); //criptografar a senha

$_sql = "INSERT INTO aluno(nome,email) VALUES ('$_nomee','$_emaill')";

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