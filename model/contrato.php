<?php
class Contrato
{
    private $pdo;

    public $id_contrato;
    public $documento;
    public $nombre_conductor;
    public $apellido_conductor;
    public $telefono_conductor;
    public $fecha_inicio;
    public $fecha_fin;
    public $valor;
   

    
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
            
            $stm = $this->pdo->prepare("SELECT * FROM Contrato");
         
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
        
            die($e->getMessage());
        }
    }

    public function Obtener($id_contrato)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT * FROM contrato WHERE id_contrato = ?");

            $stm->execute(array($id_contrato));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Eliminar($id_contrato)
    {
        try
        {
    
            $stm = $this->pdo
                        ->prepare("DELETE FROM contrato WHERE id_contrato = ?");

            $stm->execute(array($id_contrato));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Actualizar($data)
    {
        try
        {
          
            $sql = "UPDATE contrato SET
                        documento             =?,
                        nombre_conductor       = ?,
                        apellido_conductor     = ?,
                        telefono_conductor    = ?,
                        fecha_inicio          = ? ,  
                        fecha_fin             = ?,
                        valor                   = ?
                    WHERE id_contrato = ?";
          
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->documento,
                        $data->nombre_conductor,
                        $data->apellido_conductor,
                        $data->telefono_conductor,
                        $data->fecha_inicio,
                        $data->fecha_fin,
                        $data->valor,
                        $data->id_contrato
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Contrato $data)
    {
        try
        {
            
            $sql = "INSERT INTO contrato (id_contrato,
            documento,nombre_conductor,apellido_conductor,telefono_conductor,fecha_inicio,fecha_fin,valor)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id_contrato,
                    $data->documento,
                    $data->nombre_conductor,
                    $data->apellido_conductor,
                    $data->telefono_conductor,
                    $data->fecha_inicio,
                    $data->fecha_fin,
                    $data->valor,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}