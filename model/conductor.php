<?php
class Conductor
{
    private $pdo;

    public $documento;
    public $nombre_conductor;
    public $apellido_conductor;
    public $telefono_conductor;
   

    //Método de conexión a SGBD.
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
            
            $stm = $this->pdo->prepare("SELECT * FROM conductor");
   
            $stm->execute();
         
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
         
            die($e->getMessage());
        }
    }


    public function Obtener($documento)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM conductor WHERE documento = ?");
 
            $stm->execute(array($documento));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function Eliminar($documento)
    {
        try
        {
           
            $stm = $this->pdo
                        ->prepare("DELETE FROM conductor WHERE documento = ?");

            $stm->execute(array($documento));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

  
    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE conductor SET
                        nombre_conductor       = ?,
                        apellido_conductor     = ?,
                        telefono_conductor    = ?
                    WHERE documento = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre_conductor,
                        $data->apellido_conductor,
                        $data->telefono_conductor,
                        $data->documento
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Conductor $data)
    {
        try
        {
            $sql = "INSERT INTO conductor (documento,
            nombre_conductor,apellido_conductor,telefono_conductor)
                VALUES (?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->documento,
                    $data->nombre_conductor,
                    $data->apellido_conductor,
                    $data->telefono_conductor,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}