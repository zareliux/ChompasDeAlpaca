<?php
require_once 'control/PedidosControl.php';
require_once 'model/usuario.php';
$model = new usuario();
$usuarios = $model->listar();

?>
