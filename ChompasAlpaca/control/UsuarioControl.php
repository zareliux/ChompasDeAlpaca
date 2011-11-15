<?php
require_once '/../model/usuario.php';
class UsuarioControl {

    public function validarLogin($email, $password){
        $usuario = new usuario($id, $email, $password);
       $usuario->ValidarUsuario();
    }
}
?>
