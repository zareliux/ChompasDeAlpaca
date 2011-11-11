<?php
require_once '/../dm/Persistence.php';
require_once '/../dm/Sql.php';
class chompa {
    private $_id;
    private $_nombre;
    private $_insumo;
    private $_stockMin;
    private $_cantidadActual;
    private $_cantxpedido;

    public function __construct($id="", $nombre="", $insumo="", $stockMin="", $cantActual="", $cantxpedido="") {
        $this->_id=$id;
        $this->_nombre=$nombre;
        $this->_insumo=$insumo;
        $this->_stockMin=$stockMin;
        $this->_cantidadActual=$cantActual;
        $this->_cantxpedido=$cantxpedido;
    }

    public function getID(){return $this->_id;}
    public function getNombre(){return $this->_nombre;}
    public function getInsumo(){return $this->_insumo;}
    public function getStockMinimo(){return $this->_stockMin;}
    public function getCantidadActual(){return $this->_cantidadActual;}
    public function getCantidadxPedido(){return $this->_cantxpedido;}

    public function setStockReal($stockReal){$this->_cantidadActual = $stockReal;}


     private function _traerDatos()
   {
       $sql = new Sql();
       $sql->addTable('chompas');
       $lista = Persistence::consultar($sql);
       return $lista;
   }
   public function listar(){
        $lista = $this->_traerDatos();
        foreach($lista as $chompa)
        {
            $id = $chompa['chompaID'];
            $nombre = $chompa['nombre'];
            $insumo = $chompa['tipoInsumo'];
            $stockMin = $chompa['stockMin'];
            $cantActual = $chompa['StockReal'];
            $cantxPedido = $chompa['UnidadesxPedido'];
            $arreglo[] = new chompa($id, $nombre, $insumo, $stockMin, $cantActual, $cantxpedido);
        }
        return $arreglo;
   }

   public function calcularStockActual($cantComprada){
        $this->_cantidadActual = $this->_cantidadActual - $cantComprada;
       return $this->_cantidadActual;
    }

    public function update(){
        $sql = "UPDATE `chompasAlpaca`.`chompas` SET  `StockReal` = '$this->_cantidadActual'
                WHERE `chompas`.`chompaID` = $$this->_id;";
        $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasAlpaca', $conexion);
        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

   }
?>
