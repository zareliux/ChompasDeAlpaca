<?php
require_once '/../Interface/FactoryInterface.php';
require_once '/../Model/Libro.php';
require_once '/../Interface/ItemsInterface.php';

abstract class FactoryItems implements ItemsInterface{
 static public function Create($itemType){
     switch($itemType){
         case '1':return new Libro();
                  default:
             throw new Exception("Tipo de Item desconocido");
     }
 }
}
