<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/conductor.php';

class ConductorController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new Conductor();
    }

    public function Index(){
        require_once 'view/Conductor/header_2.php';
        require_once 'view/Conductor/conductor.php';
        require_once 'view/footer.php';
    }


    public function Crud(){
        $con = new Conductor();


        if(isset($_REQUEST['documento'])){
            $con = $this->model->Obtener($_REQUEST['documento']);
        }

        require_once 'view/Conductor/header_2.php';
        require_once 'view/Conductor/conductor-editar.php';
        require_once 'view/footer.php';
  }

   
    public function Nuevo(){
        $con= new Conductor();

        require_once 'view/Conductor/header_2.php';
        require_once 'view/Conductor/conductor-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $con = new Conductor();

   
        $con->documento = $_REQUEST['documento'];
        $con->nombre_conductor = $_REQUEST['nombre_conductor'];
        $con->apellido_conductor = $_REQUEST['apellido_conductor'];
        $con->telefono_conductor = $_REQUEST['telefono_conductor'];


        $this->model->Registrar($con);
        

        header('Location: index.php?c=conductor');
    }


    public function Editar(){
        $con = new Conductor();

        $con->documento = $_REQUEST['documento'];
        $con->nombre_conductor = $_REQUEST['nombre_conductor'];
        $con->apellido_conductor = $_REQUEST['apellido_conductor'];
        $con->telefono_conductor = $_REQUEST['telefono_conductor'];
        $result = $this->model->Actualizar($con);
           
        header('Location: index.php?c=conductor');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['documento']);
        header('Location: index.php?c=conductor');
    }
    public function consul(){
    require_once 'view/Conductor/header_2.php';
    require_once 'view/Conductor/conductor-consultar.php';
    }
}
?>