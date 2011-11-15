<?php
require_once '/../db/BaseDeDatos.php';
require_once '/../ds/MySQL.php';

abstract class Persistence {
   static private function _conectarBD()
   {
        $db = new MySQL();
        $cn = new BaseDeDatos($db);
        return $cn;
   }
   static public function consultar(Sql $sql)
   {
        $db = Persistence::_conectarBD();
        $respuesta = $db->ejecutar($sql);
        return $respuesta;
   }

   
}
?>
