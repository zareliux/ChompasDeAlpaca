<?php
require_once '/../dm/Persistence.php';
require_once '/../dm/Sql.php';

class pedido {
    private $_id;
    private $_fecha;
    private $_chompaId;
    private $_insumo;
    private $_cantidad;
    private $_estado;

    public function __construct($id="", $fecha="", $chompaID="", $insumo="", $cantidad="", $estado="") {
        $this->_id=$id;
        $this->_fecha=$fecha;
        $this->_chompaId=$chompaID;
        $this->_insumo=$insumo;
        $this->_cantidad=$cantidad;
        $this->_estado=$estado;
    }

    public function getID(){return $this->_id;}
    public function getFecha(){return $this->_fecha;}
    public function getChompaID(){return $this->_chompaId;}
    public function getInsumo(){return $this->_insumo;}
    public function getCantidad(){return $this->_cantidad;}
    public function getEstado(){return $this->_estado;}
    public function setFecha($fecha){$this->_fecha = $fecha;}
    public function setEstado($estado){$this->_estado = $estado;}

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
            $id = $pedido['pedidoID'];
            $fecha = $pedido['fecha'];
            $chompaID = $pedido['chompaID'];
            $insumo = $pedido['insumo'];
            $cantidad = $pedido['cantidadTotal'];
            $estado = $pedido['estado'];
            $arreglo[] = new pedido($id, $fecha, $chompaID, $insumo, $cantidad, $estado);
        }
        return $arreglo;
   }

   public function insertar(){
      $sql = "INSERT INTO `chompasAlpaca`.`pedidos` (`pedidoID`, `fecha`, `chompaID`, `insumo`, `cantidadTotal`, `estado`)
            VALUES (NULL, '$this->_fecha', '$this->_chompaId', '$this->_insumo','$this->_cantidad', '$this->_estado');";
        $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasAlpaca', $conexion);

        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

    public function update(){
        $sql = "UPDATE `chompasalpaca`.`pedidos` SET `estado` = '$this->_estado' WHERE `pedidos`.`pedidoID` = '$this->_id' ;";
         $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasAlpaca', $conexion);

        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

    public function setFechaActual(){
        $this->_fecha = date("d/m/Y");
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
            $chompaID=$pedido['chompaID'];
            $insumo=$pedido['insumo'];
            $cantidad=$pedido['cantidadTotal'];
            $estado = $pedido['estado'];
            $arreglo[] = new pedido($id, $fecha, $chompaID, $insumo, $cantidad, $estado);
        }
        return $arreglo;
    }
}
?>
