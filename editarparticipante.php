<!DOCTYPE html>
<?php 
    require 'arquivos/config/classes.php';
    $participantes=$banco->pegarParticipanteEditar($_GET['id']);

 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title>
    <link rel="stylesheet" href="arquivos/css/style.css">
</head>
<body>
    <section class="container">
        <div class="bloco-principal">
             <h1 class="titulo">AMIGO SECRETO LOOPIS</h1>
               <?php foreach ($participantes as $key => $value) { ?>
             <form method="post" action="arquivos/config/validaeditar.php">
                <input  name="id" value="<?=$value['id'];?>" style="display: none;"> 
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?=$value['nome'];?>" id="nome">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?=$value['email'];?>" id="email">
               <button class="btncenter" type="submit">SALVAR</button> 
            </form>
                <?php } ?>
        </div>
    </section>
</body>
</html>