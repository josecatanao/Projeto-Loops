<?php
require 'classes.php';
$banco->excluirParticipante($_GET['id']);
header("Location:../alertas/excluidocomsucesso.php");