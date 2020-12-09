<?php
class Usuario
{
    private $pdo;

    public $usuario;
    public $contrasena;
    public $tipo;

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
        
            $stm = $this->pdo->prepare("SELECT * FROM usuario");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }


    public function Obtener($usuario)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE usuario = ?");
       
            $stm->execute(array($usuario));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Eliminar($usuario)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM usuario WHERE usuario = ?");

            $stm->execute(array($usuario));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE usuario SET
                        contrasena         =?,
                        tipo             =?

                    WHERE usuario = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->contrasena,
                        $data->tipo,
                        $data->usuario
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Registrar(Usuario $data)
    {
        try
        {
         
            $sql = "INSERT INTO usuario(usuario,
            contrasena,tipo)
                VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->usuario,
                    $data->contrasena,
                    $data->tipo,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}