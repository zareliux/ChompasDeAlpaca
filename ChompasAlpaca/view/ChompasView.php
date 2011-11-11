<?php
require_once '/../control/ChompasControl.php';
require_once '/../control/PedidosControl.php';
class ChompasView {

    public function ejecutar(){
        $miControlChompa = new ChompasControl();
        if(!$_POST['venta']){
            $listaChompa = $miControlChompa->getAll();
            $this->_mostrarFormularioVentas($listaChompa);
        }
        else{
            $chompa = new chompa();
           $lista = $miControlChompa->getAll();
           for ($id = 0 ; $id < count($lista) ; $id++) {
              $cantComprada = $_POST["cantidad$id"];
              $cantidad =$chompa->calcularStockActual($cantComprada);
              $miControlChompa->modificar($id, $cantidad);
           }
           $listaChompas = $miControlChompa->getAll();
           $this->_mostrarResultadoVenta($listaChompas);       

    }
    }

    private function _mostrarFormularioVentas($listaChompa){
        require_once 'InicioVenta.php';
    }

    private function _mostrarResultadoVenta($listaChompas){
        require_once 'ResultadoVentas.php';
    }
}

$miView = new ChompasView();
$miView->ejecutar();
?>
