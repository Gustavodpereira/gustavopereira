<?php
    @$_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR DADOS</title>
    </head>
    <body bgcolor="#E68153">
        <font face="Arial , Sans-serif">
            <?php
                if( isset( $_POST['id'] ) )
                {
                    include_once( "../db/conexao.php" );
                    
                    $_id = $_POST['id'];
                    
                    $_sql = "SELECT * FROM aluno WHERE id = '$_id'";
                    
                    $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error() );
                    
                    $_line = mysqli_fetch_array( $_query ); 
            ?>
                    <form method="post" action="atualizar.php" name="formatualizar" id="idforatualizar">
                        <p>ID&nbsp;&nbsp;<input type="hidden" name="id" id="idid" value="<?php echo $_line['id'] ?>"></p>
                        <p>NOME&nbsp;&nbsp;<input type="text" name="nome" id="idnome" value="<?php echo $_line['nome'] ?>"></p>
                        <p>EMAIL&nbsp;&nbsp;<input type="text" name="email" id="idemail" value="<?php echo $_line['email'] ?>"></p>
                        <p><input type="submit" name="btnatualizar" id="idbtnatualizar" value="Atualizar"></p>
                    </form>
            <?php
                }
                else
                {
            ?>
                    <form method="post" action="telaatualizar.php" name="formatualizar" id="idforatualizar">
                        <p>ID&nbsp;&nbsp;<input type="text" name="id" id="idid" value="<?php echo $_id ?>"></p>
                        <p><input type="submit" name="btnconsultar" id="idbtnconsultar" value="Consultar"></p>
                    </form>
            <?php
                }
            ?>
            <br><hr><br><br><br><br><br>
            <a href="../index.php">VOLTAR PARA O MENU</a>
        </font>
    </body>
</html>