<?php
include '../librerias.php';


$oUsu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if($oUsu->VerificaLocal())
    echo "Todo bien";  
else
    echo "Todo mal";
