<?php
class Ruta
{
    private $pdo;

    public $id_ruta;
    public $nombre_ruta;


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
        
            $stm = $this->pdo->prepare("SELECT * FROM ruta");
     
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
       
            die($e->getMessage());
        }
    }


    public function Obtener($id_ruta)
    {
        try
        {
           
            $stm = $this->pdo->prepare("SELECT * FROM ruta WHERE id_ruta = ?");
  
            $stm->execute(array($id_ruta));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

   
    public function Eliminar($id_ruta)
    {
        try
        {
            
            $stm = $this->pdo
                        ->prepare("DELETE FROM ruta WHERE id_ruta = ?");

            $stm->execute(array($id_ruta));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }


    public function Actualizar($data)
    {
        try
        {
          
            $sql = "UPDATE ruta SET
                        nombre_ruta            =?

                    WHERE id_ruta = ?";
     
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre_ruta,
                        $data->id_ruta
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Registrar(Ruta $data)
    {
        try
        {
            $sql = "INSERT INTO ruta (id_ruta,
            nombre_ruta)
                VALUES (?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id_ruta,
                    $data->nombre_ruta,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}