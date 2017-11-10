<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "Database.php";

class Pedido
{
    public function listar()
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT *		
			       FROM Pedido;";

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los pedidos.");

        $productos = array(array("id", "sku", "cantidad", "fecha"));
        $i=0;
        while($datos = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["id"]=$datos["id"];
            $productos[$i]["sku"]=$datos["sku"];
            $productos[$i]["cantidad"]=$datos["cantidad"];
            $productos[$i]["fecha"]=$datos["fecha"];
            $i++;
        }
        return $productos;
    }

    
    public function guardar($data)
    {
        $db=new database();
        $db->conectar();

        $fecha=date("Y-m-d");
        $cantidad=1;

        $consulta = 'INSERT INTO Pedido (sku,
                                         cantidad,
                                         fecha)
                     VALUES("' . $data["sku"] . '",
                            "' . $cantidad . '",
                            "' . $fecha . '");';

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pudo guardar el pedido.");
    }


}
?>