<?php

require 'classes.php';
$nome =filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$button=filter_input(INPUT_POST, 'button', FILTER_SANITIZE_STRING);



if ($button==1){
	if(empty($nome) || empty($email)){
      header("Location:../alertas/alertalogin.php");
	}else{
	    $banco->adicionarParticipante($nome,$email);
	     header("Location:../alertas/salvocomsucesso.php");
	}
}else{
	if(empty($nome) || empty($email)){
      header("Location:../alertas/alertalogin.php");
	}else{
	    $banco->adicionarParticipante($nome,$email);
	    header("Location:../alertas/addnovamente.php");
	}
}


