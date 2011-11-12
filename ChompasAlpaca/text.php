<?php
require_once 'control/PedidosControl.php';
$control = new PedidosControl();
$lista =$control->getAllPedidos();
echo var_dump($lista);
?>
