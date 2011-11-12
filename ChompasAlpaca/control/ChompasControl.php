<?php
require_once '/../Interface/ItemsInterface.php';
require_once '/../model/chompa.php';
class ChompasControl {

   private $_colChompas;

   public function getAll(){
       $chompa = new chompa();
       $lista = $chompa->listar();
        foreach ($lista as $chompa) {
            $this->_colChompas[]=$chompa;
        }
        return $this->_colChompas;
   }

   public function modificar($id, $cantActual){
    $chompa = new chompa($id, $nombre, $insumo, $stockMin, $cantActual, $cantxpedido);
    $chompa->update();
   }

   
}
?>
