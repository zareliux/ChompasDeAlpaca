<?php
require_once '/../dm/Persistence.php';
require_once '/../dm/Sql.php';
class usuario {
    private $_id;
    private $_usuario;
    private $_clave;

    function __construct($id="",$usuario="", $clave="") {
        $this->_id=$id;
        $this->_usuario = $usuario;
        $this->_clave = $clave;
    }
    public function get_id() {        return $this->_id;    }
    public function set_id($_id) {        $this->_id = $_id;    }
    public function get_usuario() {        return $this->_usuario;    }
    public function get_clave() {        return $this->_clave;    }
    public function set_usuario($_usuario) {        $this->_usuario = $_usuario;    }
    public function set_clave($_clave) {        $this->_clave = $_clave;    }

    public function NewUser(){
        $sql = "INSERT INTO `chompasalpaca`.`usuario` (`id`, `usuario`, `password`)
                VALUES (NULL, '$this->_usuario', '$this->_clave');";
                 $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasalpaca', $conexion);
        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

  /*  public function ValidarUsuario(){
        $lista = $this->_traerdatos();
        foreach ($lista as $usuario) {
            if(($this->_usuario==$usuario->get_usuario()) && ($usuario->get_clave()==$this->_clave)){
                return $usuario;
            }
        }
    }*/

    public function ValidarUsuario(){
        $sql = "SELECT * FROM `chompasalpaca`.`usuario` WHERE `password` = '$this->_clave'
                AND `usuario` = '$this->_usuario';";

        $conexion = mysql_connect('localhost', 'root');
        mysql_select_db('chompasalpaca', $conexion);
        $resultado = mysql_query($sql, $conexion);
        return $resultado;
    }

private  function _traerdatos(){

    $sql= new SQL();
    $sql->addTable('usuario');
    $lista=Persistence::consultar($sql);
    return $lista;
}

private function _buscarDatos($where){
        $sql = new Sql();
        $sql->addTable('usuario');
        $sql->addWhere($where);
        $lista = Persistence::consultar($sql);
        return $lista;
    }

public function listar(){
    $lista=$this->_traerdatos();
    foreach ($lista as $usuario) {
        $id=$usuario['id'];
        $nombre=$usuario['usuario'];
        $paswword=$usuario['password'];
        $arreglo[]=new usuario($id, $nombre, $paswword);
    }
    return $arreglo;
}


}
?>
