<?php

require 'arquivos/config/classes.php';
$participantes=$banco->mostraParticipantes();
shuffle($participantes);
$array1 = $participantes;
shuffle($participantes);
$array2 = $participantes;
$pronto=0;
while($pronto!=count($array1)){
	$pronto=0;
	for ($i=0; $i<count($array1); $i++){
		if ($array1[$i]['nome']!=$array2[$i]['nome']) {
		//echo($array1[$i]['nome']."--".$array2[$i]['nome']."<br>");
			$pronto++;
		}else{
			shuffle($array1);
			shuffle($array2);
		}
	} 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title>
    <link rel="stylesheet" href="arquivos/css/sorteio.css">    
    <script src="https://kit.fontawesome.com/347135fd92.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="tudo">
        <div class="bloco">
            <h1>AMIGO SECRETO LOOPIS</h1>

            <h3>Sorteio realizado com sucesso!</h3>
            <?php for ($i=0; $i<count($array1); $i++){?>
                <p><?=$array1[$i]['nome']." -- ".$array2[$i]['nome']?></p>
            <?php }?>
             <a class="btn" href="index.php">OK</a>
            
        </div>
    </div>

</body>
</html>			

		
	

