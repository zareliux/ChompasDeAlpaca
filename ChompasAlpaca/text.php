<?php
require_once 'model/chompa.php';
require_once 'control/ChompasControl.php';
/*$chompa = new chompa();
$lista = $chompa->listar();

echo var_dump($lista);*/

$control = new ChompasControl();
$listacontrol = $control->getAll();
echo var_dump($listacontrol);

?>
