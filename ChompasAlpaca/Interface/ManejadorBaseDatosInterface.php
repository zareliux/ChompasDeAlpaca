<?php

interface ManejadorBaseDatosInterface {
    public function conectar();
    public function desconectar();
    public function traerDatos(Sql $sql);
    public function insertarDatos(SqlInsertar $sql);

}
?>
