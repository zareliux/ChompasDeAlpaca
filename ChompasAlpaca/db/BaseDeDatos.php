<?php
require_once '/../Interface/ManejadorBaseDatosInterface.php';
require_once '/../dm/Sql.php';
class BaseDeDatos {
   private $_manejador;
   public function __construct(ManejadorBaseDatosInterface $manejador)
   {
    $this->_manejador = $manejador;
   }

   public function ejecutar(Sql $sql)
   {
       $this->_manejador->conectar();
       $datos = $this->_manejador->traerDatos($sql);
       $this->_manejador->desconectar();
       return $datos;
   }
}

