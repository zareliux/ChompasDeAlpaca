<?php
require_once '/../dm/Persistence.php';
require_once '/../dm/Sql.php';

class pedido {
    private $_id;
    private $_fecha;
    private $_insumo;
    private $_cantidad;

    public function __construct($id="", $fecha="", $insumo="", $cantidad="") {
        $this->_id=$id;
        $this->_fecha=$fecha;
        $this->_insumo=$insumo;
        $this->_cantidad=$cantidad;
    }

    public function getID(){return $this->_id;}
    public function getFecha(){return $this->_fecha;}
    public function getInsumo(){return $this->_insumo;}
    public function getCantidad(){return $this->_cantidad;}

     private function _traerDatos()
   {
       $sql = new Sql();
       $sql->addTable('pedidos');
       $lista = Persistence::consultar($sql);
       return $lista;
   }
   public function listar(){
        $lista = $this->_traerDatos();
        foreach($lista as $pedido)
        {
            $id = $$pedido['pedidoID'];
            $fecha = $$pedido['fecha'];
            $insumo = $$pedido['insumo'];
            $cantidad = $$pedido['cantidadTotal'];

            $arreglo[] = new pedido($id, $fecha, $insumo, $cantidad);
        }
        return $arreglo;
   }

   public function insertar(){
      $sql = "INSERT INTO `chompasAlpaca`.`pedidos`
                (`pedidoID`, `fecha`, `insumo`, `cantidadTotal`) VALUES (NULL, '$this->_fecha', '$this->_insumo','$this->_cantidad');";
        $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasAlpaca', $conexion);

        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

    public function seleccionarFecha(){
        $this->_fecha = da;
       return $this->_fecha;
    }

    private function _buscarDatos($fecha){
        $sql = new Sql();
        $sql->addTable('pedidos');
        $sql->addWhere($fecha);
        $lista = Persistence::consultar($sql);
        return $lista;
    }

    public function buscar($fecha){
        $lista = $this->_buscarDatos($fecha);
        foreach ($lista as $pedido) {
            $id= $pedido['pedidoID'];
            $fecha=$pedido['fecha'];
            $insumo=$pedido['insumo'];
            $cantidad=$pedido['cantidadTotal'];
            $arreglo[]=new pedido($id, $fecha, $insumo, $cantidad);
        }
        return $arreglo;
    }
}
?>
