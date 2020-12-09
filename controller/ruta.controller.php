<?php

require_once 'model/ruta.php';

class RutaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Ruta();
    }

    public function Index(){
        require_once 'view/Ruta/header_4.php';
        require_once 'view/Ruta/ruta.php';
        require_once 'view/footer.php';
    }

 
    public function Crud(){
        $rut = new Ruta();

        if(isset($_REQUEST['id_ruta'])){
            $rut = $this->model->Obtener($_REQUEST['id_ruta']);
        }

 
        require_once 'view/Ruta/header_4.php';
        require_once 'view/Ruta/ruta-editar.php';
        require_once 'view/footer.php';
  }

    public function Nuevo(){
        $rut= new Ruta();


        require_once 'view/Ruta/header_4.php';
        require_once 'view/Ruta/ruta-nuevo.php';
        require_once 'view/footer.php';
    }

 
    public function Guardar(){
        $rut = new Ruta();

    
        $rut->id_ruta = $_REQUEST['id_ruta'];
        $rut->nombre_ruta = $_REQUEST['nombre_ruta'];

 
        $this->model->Registrar($rut);

        header('Location: index.php?c=ruta');
    }


    public function Editar(){
        $rut = new Ruta();

        $rut->id_ruta = $_REQUEST['id_ruta'];
        $rut->nombre_ruta = $_REQUEST['nombre_ruta'];
        $result = $this->model->Actualizar($rut);
           
        header('Location: index.php?c=ruta');
    }

 
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_ruta']);
        header('Location: index.php?c=ruta');
    }
    public function consul(){
    require_once 'view/Ruta/header_4.php';
    require_once 'view/Ruta/ruta-consultar.php';
    }
}
?>