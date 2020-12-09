<?php

require_once 'model/usuario.php';

class UsuarioController{

    private $model;

    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }

    public function Index(){
        require_once 'view/Usuario/header_5.php';
        require_once 'view/Usuario/usuario.php';
        require_once 'view/footer.php';
    }

    
    public function Crud(){
        $usu = new Usuario();

       
        if(isset($_REQUEST['usuario'])){
            $usu = $this->model->Obtener($_REQUEST['usuario']);
        }

       
        require_once 'view/Usuario/header_5.php';
        require_once 'view/Usuario/usuario-editar.php';
        require_once 'view/footer.php';
  }

   
    public function Nuevo(){
        $usu= new Usuario();

     
        require_once 'view/Usuario/header_5.php';
        require_once 'view/Usuario/usuario-nuevo.php';
        require_once 'view/footer.php';
    }

   
    public function Guardar(){
        $usu = new Usuario();

        
        $usu->usuario = $_REQUEST['usuario'];
        $usu->contrasena = $_REQUEST['contrasena'];
        $usu->tipo = $_REQUEST['tipo'];


        
        $this->model->Registrar($usu);
        

        header('Location: index.php?c=usuario');
    }

    public function Editar(){
        $usu = new Usuario();

        $usu->usuario = $_REQUEST['usuario'];
        $usu->contrasena = $_REQUEST['contrasena'];
        $usu->tipo = $_REQUEST['tipo'];
        $result = $this->model->Actualizar($usu);
           
        header('Location: index.php?c=usuario');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['usuario']);
        header('Location: index.php?c=usuario');
    }
    public function consul(){
    require_once 'view/Usuario/header_5.php';
    require_once 'view/Usuario/usuario-consultar.php';
    }
    public function Ingreso(){
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
        $tipo=$_POST['tipo'];

       $sql ="SELECT * FROM usuario WHERE usuario='$usuario' and contrasena='$contrasena' and tipo='$tipo'";
       $resultado=$base->prepare($sql);
       $resultado->execute();

       $numero_registro=$resultado->rowcount();
       if ($numero_registro!=0) {
        header("location: ../menu.php");
}

}
}

?>