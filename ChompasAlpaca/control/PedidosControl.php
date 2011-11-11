<?php
require_once '/../model/pedido.php';
require_once '/../interface/ItemsInterface.php';
class PedidosControl {
    private $_colPedidos;

   public function getAllPedidos(ItemsInterface $listaPedido){
        $lista = $listaPedido->listar();
        foreach ($lista as $pedido) {
            $this->_colPedidos[]=$pedido;
        }
        return $this->_colPedidos;
    }

    public function insertar($fecha, $insumo, $cantidad){
        $pedido = new pedido($id, $fecha, $insumo, $cantidad);
        $pedido->insertar();
    }

    public function buscar(ItemsInterface $iPedido){
        $lista = $iPedido->buscar($fecha);
        foreach ($lista as $pedido) {
            $array[]=$pedido;
        }
        return $array;
    }

    /*public function setMensajeResultado($promedio){
        $alumno = new alumno();

        if($promedio>10){
           $mensaje = 'APROBADO';
        }
        elseif($promedio<11){
            $mensaje = 'DESAPROBADO';
        }
        $alumno->setResultado($mensaje);
        return $mensaje;
    }*/
    }
?>
