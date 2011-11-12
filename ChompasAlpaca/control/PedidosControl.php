<?php
require_once '/../model/pedido.php';
require_once '/../interface/ItemsInterface.php';
class PedidosControl {
    private $_colPedidos;

   public function getAllPedidos(){
       $pedido = new pedido();
        $lista = $pedido->listar();
        foreach ($lista as $pedido) {
            $this->_colPedidos[]=$pedido;
        }
        return $this->_colPedidos;
    }

    public function insertar($fecha, $chompaID,$insumo, $cantidad, $estado){
        $pedido = new pedido($id, $fecha, $chompaID, $insumo, $cantidad, $estado);
        $pedido->insertar();
    }

    public function modificar($id, $estado){
    $pedido = new pedido($id, $fecha, $chompaID, $insumo, $cantidad, $estado);
    $pedido->update();
   }

   public function setFechaActual(){
       $pedido=new pedido();
       $fecha = date("d/m/Y");
       $fechaActual =$pedido->setFecha($fecha);
       return $fechaActual;
   }

    public function buscar($fecha){
        $pedido = new pedido();
        $lista = $pedido->buscar($fecha);
        foreach ($lista as $pedidito) {
            $array[]=$pedidito;
        }
        return $array;
    }   
    }
?>
