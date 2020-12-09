<?php
class Buses
{
    private $pdo;
    
    public $placa;
    public $documento;
    public $nombre_conductor;
    public $apellido_conductor;
    public $id_ruta;
   

   public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();     
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


    public function Listar()
    {
        try
        {
            $result = array();
       
            $stm = $this->pdo->prepare("SELECT * FROM buses");
      
            $stm->execute();
         
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
       
            die($e->getMessage());
        }
    }

 
    public function Obtener($placa)
    {
        try
        {
  
   
            $stm = $this->pdo->prepare("SELECT * FROM buses WHERE placa = ?");

            $stm->execute(array($placa));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($placa)
    {
        try
        {

            $stm = $this->pdo
                        ->prepare("DELETE FROM buses WHERE placa = ?");

            $stm->execute(array($placa));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }


    public function Actualizar($data)
    {
        try
        {
   
            $sql = "UPDATE buses SET
                        documento          = ?,
                        nombre_conductor       = ?,
                        apellido_conductor     = ?,
                        id_ruta    = ?
                    WHERE placa = ?";
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->documento,
                        $data->nombre_conductor,
                        $data->apellido_conductor,
                        $data->id_ruta,
                        $data->placa
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Buses $data)
    {
        try
        {
    
            $sql = "INSERT INTO buses (placa,
            documento,nombre_conductor,apellido_conductor,id_ruta)
                VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->placa,
                    $data->documento,
                    $data->nombre_conductor,
                    $data->apellido_conductor,
                    $data->id_ruta,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}