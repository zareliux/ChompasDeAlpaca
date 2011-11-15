<?php
require_once '/../control/UsuarioControl.php';
session_start();
class LoginView {
    public function ejecutar(){
        $control = new UsuarioControl();
        if(!isset ($_POST['password'])&& !isset ($_POST['usuario'])){
           $this->_mostrarLogin();
        }
        else{
            if(isset ($_POST['password']) && isset ($_POST['usuario'])){
            $clave = $_POST['password'];
            $usuario = $_POST['usuario'];
            $_SESSION['usuario']=$usuario;
            $control->validarLogin($usuario, $clave);            
            header("location:ChompasView.php");
        }}
    }
    private function _mostrarLogin(){
        require_once 'login.php';
    }
}

$miLoginView = new LoginView();
$miLoginView->ejecutar();
?>
