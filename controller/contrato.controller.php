<?php

require_once 'model/contrato.php';

class ContratoController{

    private $model;


    public function __CONSTRUCT(){
        $this->model = new Contrato();
    }


    public function Index(){
        require_once 'view/Contrato/header_3.php';
        require_once 'view/Contrato/contrato.php';
        require_once 'view/footer.php';
    }

 
    public function Crud(){
        $cont = new Contrato();

  
        if(isset($_REQUEST['id_contrato'])){
            $cont = $this->model->Obtener($_REQUEST['id_contrato']);
        }

   
        require_once 'view/Contrato/header_3.php';
        require_once 'view/Contrato/contrato-editar.php';
        require_once 'view/footer.php';
  }

 
    public function Nuevo(){
        $cont= new Contrato();

 
       require_once 'view/Contrato/header_3.php';
        require_once 'view/Contrato/contrato-nuevo.php';
        require_once 'view/footer.php';
    }


    public function Guardar(){
        $cont = new Contrato();


        $cont->id_contrato = $_REQUEST['id_contrato'];
        $cont->documento = $_REQUEST['documento'];
        $cont->nombre_conductor = $_REQUEST['nombre_conductor'];
        $cont->apellido_conductor = $_REQUEST['apellido_conductor'];
        $cont->telefono_conductor = $_REQUEST['telefono_conductor'];
        $cont->fecha_inicio = $_REQUEST['fecha_inicio'];
        $cont->fecha_fin = $_REQUEST['fecha_fin'];
        $cont->valor = $_REQUEST['valor'];


        $this->model->Registrar($cont);


        

        header("Location: index.php?c=contrato");
    }

    public function Editar(){
        $cont = new Contrato();

        $cont->id_contrato = $_REQUEST['id_contrato'];
        $cont->documento = $_REQUEST['documento'];
        $cont->nombre_conductor = $_REQUEST['nombre_conductor'];
        $cont->apellido_conductor = $_REQUEST['apellido_conductor'];
        $cont->telefono_conductor = $_REQUEST['telefono_conductor'];
        $cont->fecha_inicio = $_REQUEST['fecha_inicio'];
        $cont->fecha_fin = $_REQUEST['fecha_fin'];
        $cont->valor = $_REQUEST['valor'];
        $result = $this->model->Actualizar($cont);
           
        header('Location: index.php?c=contrato');
    }


    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_contrato']);
        header('Location: index.php?c=contrato');
    }
    public function consul(){
    require_once 'view/Contrato/header_3.php';
    require_once 'view/Contrato/contrato-consultar.php';
    }
}
?>