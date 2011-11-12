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
            switch ($opcion) {
                case 1:
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
                    }}
                    $pedidosfinal = $pedidoControl->getAllPedidos();
                    $this->_mostrarPedidoResultado($pedidosfinal);
                  break;
                case 2:
                    $listado = $pedidoControl->getAllPedidos();
                    $this->_mostrarListaPedidos($listado);
                    break;
                case 3:
                    $listadoChompa=$chompaControl->getAll();
                    $this->_mostrarStock($listadoChompa);
                    break;
                case 4:
                    $listaChompa=$chompaControl->getAll();
                    $this->_mostrarformularioVentas($listaChompa);
                    break;

                default:
                    break;

            }
    }}

    private function _mostrarPedidoForm($listaPedidos){
        require_once 'FormPedidos.php';
    }

    private function _mostrarPedidoResultado($pedidos){
        require_once 'ResultadoPedido.php';
    }

    private function _mostrarListaPedidos($lista){
        require_once 'ListaPedidos.php';
    }
    private function _mostrarStock($lista){
        require_once 'ListaStock.php';
    }

    private function _mostrarformularioVentas($lista){
        require_once 'InicioVenta.php';
    }
}

$pedidoview=new PedidoView();
$pedidoview->ejecutar();
?>
