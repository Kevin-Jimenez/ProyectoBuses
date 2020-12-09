<?php

require_once 'model/buses.php';

class BusesController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Buses();
    }

    public function Index(){
        require_once 'view/Buses/header_1.php';
        require_once 'view/Buses/buses.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $bus = new Buses();

        if(isset($_REQUEST['placa'])){
            $bus = $this->model->Obtener($_REQUEST['placa']);
        }
        require_once 'view/Buses/header_1.php';
        require_once 'view/Buses/buses-editar.php';
        require_once 'view/footer.php';
  }

    public function Nuevo(){
        $bus= new Buses();

        require_once 'view/Buses/header_1.php';
        require_once 'view/Buses/buses-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $bus = new Buses();

        $bus->placa = $_REQUEST['placa'];
        $bus->documento = $_REQUEST['documento'];
        $bus->nombre_conductor = $_REQUEST['nombre_conductor'];
        $bus->apellido_conductor = $_REQUEST['apellido_conductor'];
        $bus->id_ruta = $_REQUEST['id_ruta'];

        $this->model->Registrar($bus);

        header('Location: index.php?c=buses');
    }

    public function Editar(){
        $bus = new Buses();

        $bus->placa = $_REQUEST['placa'];
        $bus->documento = $_REQUEST['documento'];
        $bus->nombre_conductor = $_REQUEST['nombre_conductor'];
        $bus->apellido_conductor = $_REQUEST['apellido_conductor'];
        $bus->id_ruta = $_REQUEST['id_ruta'];
        $this->model->Actualizar($bus);

        header('Location: index.php?c=buses');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['placa']);
       header('Location: index.php?c=buses');
    }
    public function consul(){
    require_once 'view/Buses/header_1.php';
    require_once 'view/Buses/buses-consultar.php';
}
}
?>