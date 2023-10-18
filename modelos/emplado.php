<?php 

class EmpleadoModelo{ 

    private $pdo;
    private $nombre;
    

    public function __construct(){
        include_once "modelos/baseDeDatos.php";
        $this->$pdo = BaseDeDatos::conectar();
        $this->nombre = array();
    }
    //métodos get y set

    //métodos para nombre
    public function getNombre(): ?string{
        $consulta=$this->pdo->query("SELECT nombre FROM empleado");
        while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

            $this->nombre[]=$filas;
        }

        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->$nombre = $nombre;
    }

    //prueba

    public function cantidad(){

        try
        {
            $consulta = $this->pdo->prepare("SELECT * FROM empleado");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}  