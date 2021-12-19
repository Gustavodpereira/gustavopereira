<?php
    include_once("../db/conexao.php");

    $_id = $_POST['id'];
    $_nome = $_POST['nome'];
    $_email = $_POST['email'];
    $_type = $_POST['type'];

    //$_password = md5( $_password );

    $_sql = "UPDATE aluno SET nome = '$_nome' , email = '$_email' WHERE id = '$_id'";

    $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error() );

    if( $_query )
    {
        header( "location:../html/sucesso.html");
    }
    else
    {
        header( "location:../html/falhou.html");
    }
?>