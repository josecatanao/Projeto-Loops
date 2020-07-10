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
			
for ($i=0; $i<count($array1); $i++){
				echo($array1[$i]['nome']."--".$array2[$i]['nome']."<br>");
}			

		
	

