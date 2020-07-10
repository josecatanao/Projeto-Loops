<?php
    require 'arquivos/config/classes.php';
    $participantes=$banco->mostraParticipantes();     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title>
    <link rel="stylesheet" href="arquivos/css/style.css">    
    <script src="https://kit.fontawesome.com/347135fd92.js" crossorigin="anonymous"></script>

</head>
<body>

    <h1 class="titulo">AMIGO SECRETO LOOPIS</h1>
   
     <div class="tudo">
    

        <?php if(count($participantes)==0){ ?> 
            <img class="img" src="arquivos/fotos/foto.svg" alt="">
            <p>Nenhum participante adicionado.</p>
            <a class="btn" href="addparticipante.php">ADICIONAR</a>
        <?php } else{ ?>
        <h3>OBS: o amigo secreto só pode ocorrer com no mínimo 3 pessoas.</h3> 
         <div class="bloco-participantes">
          <?php foreach ( $participantes as $key => $value) { ?>
                    <div class="participante">
                        <div class="nome">
                            <p><?=$value['nome'];?></p>
                           <a href="arquivos/alertas/desejaexcluir.php?id=<?=$value['id'];?>" style="color:#FF6B35;"><i  class="fas fa-trash-alt"></i></a>
                           <a href="editarparticipante.php?id=<?=$value['id'];?>"><i class="fas fa-pen"></i></a> 
                        </div>
                        <p><?=$value['email'];?></p>
                    </div>
         <?php } ?>
        </div>

        <a class="btn" href="sorteio.php">SORTEAR</a>
        <a class="btn" href="addparticipante.php">ADICIONAR</a>
     <?php } ?>     
    </div>


       
</body>
</html>