<?php
require_once '/../control/PedidosControl.php';
require_once '/../control/ChompasControl.php';
class PedidoView {

    public function ejecutar(){
        $pedidoControl = new PedidosControl();
        $chompaControl = new ChompasControl();
        if($_POST['pedido']){
            $listaPedidos = $pedidoControl->getAllPedidos();            
            $this->_mostrarPedidoForm($listaPedidos);
        }
       
        if($_GET['opcion']){
            $opcion = $_GET['opcion'];
            if($opcion == 1){
                $listaChompa = $chompaControl->getAll();
                $pedidos = $pedidoControl->getAllPedidos();
                foreach ($pedidos as $variable) {
                    $idPedido = $variable->getID();
                    $estado = 'Recibido';
                    $idChompa= $variable->getChompaID();
                    foreach ($listaChompa as $chompa) {
                        if($idChompa==$chompa->getID()){
                            if($variable->getEstado()=='pendiente'){
                            $cantActual=$chompa->getCantidadActual() + $variable->getCantidad();
                             $pedidoControl->modificar($idPedido, $estado);
                              $chompaControl->modificar($idChompa, $cantActual);
                        }}
                    }
                }
                $pedidosfinal = $pedidoControl->getAllPedidos();
            }
            $this->_mostrarPedidoResultado($pedidosfinal);
        }
    }

    private function _mostrarPedidoForm($listaPedidos){
        require_once 'FormPedidos.php';
    }

    private function _mostrarPedidoResultado($pedidos){
        require_once 'ResultadoPedido.php';
    }
}

$pedidoview=new PedidoView();
$pedidoview->ejecutar();
?>
