<!DOCTYPE html>
<?php 
    require '../config/classes.php';
    $participantes=$banco->pegarParticipanteEditar($_GET['id']);

 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title>
    <link rel="stylesheet" href="../css/alert.css">    
    <script src="https://kit.fontawesome.com/347135fd92.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="tudo">
        <?php foreach ($participantes as $key => $value) { ?>
        <div class="bloco">
            <h1>AMIGO SECRETO LOOPIS</h1>
            <p>Deseja realmente excluir <span><?=$value['nome'];?></span> ?</p>
            <a class="btnalert" href="../../index.php">CANCELAR</a>
             <a class="btn" href="../config/excluir.php?id=<?=$value['id'];?>">SIM</a> 
        </div>
         <?php } ?>    
    </div>

</body>
</html>