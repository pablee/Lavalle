<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "database.php";

class Productos
{
    public function listar()
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT *		
			       FROM Productos;";

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los productos.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "destacado", "img"));
        $i=0;
        while($producto = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["sku"]=$producto["sku"];
            $productos[$i]["titulo"]=$producto["titulo"];
            $productos[$i]["stock"]=$producto["stock"];
            $productos[$i]["precio"]=$producto["precio"];
            $productos[$i]["rubro"]=$producto["rubro"];
            $productos[$i]["marca"]=$producto["marca"];
            $productos[$i]["destacado"]=$producto["destacado"];
            $productos[$i]["img"]=$producto["img"];
            $i++;
        }
        return $productos;
    }


    public function listar_cat($categoria)
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT *
			       FROM Productos
			       WHERE rubro = '$categoria'
			       ORDER BY marca ASC;";

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los productos por categoria.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "destacado", "img"));
        $i=0;
        while($producto = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["sku"]=$producto["sku"];
            $productos[$i]["titulo"]=$producto["titulo"];
            $productos[$i]["stock"]=$producto["stock"];
            $productos[$i]["precio"]=$producto["precio"];
            $productos[$i]["rubro"]=$producto["rubro"];
            $productos[$i]["marca"]=$producto["marca"];
            $productos[$i]["destacado"]=$producto["destacado"];
            $productos[$i]["img"]=$producto["img"];
            $i++;
        }
        return $productos;
    }


    public function destacados()
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT *
			       FROM Productos
			       WHERE destacado=1;";

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los productos.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "destacado", "img"));
        $i=0;
        while($producto = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["sku"]=$producto["sku"];
            $productos[$i]["titulo"]=$producto["titulo"];
            $productos[$i]["stock"]=$producto["stock"];
            $productos[$i]["precio"]=$producto["precio"];
            $productos[$i]["rubro"]=$producto["rubro"];
            $productos[$i]["marca"]=$producto["marca"];
            $productos[$i]["destacado"]=$producto["destacado"];
            $productos[$i]["img"]=$producto["img"];
            $i++;
        }
        return $productos;
    }


    public function guardar($upload_data, $producto)
    {
        //echo $upload_data["file_name"];
        $db=new database();
        $db->conectar();

        $consulta = 'INSERT INTO productos (sku,
                                            titulo,
                                            stock,
                                            precio,
                                            rubro,
                                            marca,
                                            destacado,
                                            img)
                     VALUES("' . $producto["sku"] . '", 
                            "' . $producto["titulo"] . '",
                            "' . $producto["stock"] . '",
                            "' . $producto["precio"] . '",
                            "' . $producto["rubro"] . '",
                            "' . $producto["marca"] . '",
                            "' . $producto["destacado"] . '",
                            "' . $upload_data["file_name"] . '")';

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pudo guardar el producto.");
    }


    public function guardar_archivo($upload_data)
    {
        $db = new database();
        $db->conectar();

        if (($fichero = fopen("uploads/".$upload_data["file_name"]."", "r")) !== FALSE)
        {
            while (($datos = fgetcsv($fichero, 1000)) !== FALSE)
            {
                $consulta = 'INSERT INTO productos (sku,
                                                    titulo,
                                                    stock,
                                                    precio,
                                                    rubro,
                                                    marca,
                                                    destacado,
                                                    img)
                             VALUES("' . $datos["0"] . '", 
                                    "' . $datos["1"] . '",
                                    "' . $datos["2"] . '",
                                    "' . $datos["3"] . '",
                                    "' . $datos["4"] . '",
                                    "' . $datos["5"] . '",
                                    "' . $datos["6"] . '",
                                    "' . $datos["7"] . '")';
                $resultado = mysqli_query($db->conexion, $consulta) or die ("No se pueden guardar los productos.");
            }
        }
    }


    public function actualizar($productos)
    {
        $db=new database();
        $db->conectar();

        foreach($productos as $producto)
        {
            $consulta='UPDATE Productos 
                       SET  titulo="'.$producto['titulo'].'",
                            stock="'.$producto['stock'].'",
                            precio="'.$producto['precio'].'",
                            rubro="'.$producto['rubro'].'",
                            marca="'.$producto['marca'].'",
                            destacado="'.$producto['destacado'].'"
                       WHERE sku = "'.$producto['sku'].'";';
            $resultado=mysqli_query($db->conexion, $consulta)
            or die ("No se pudo actualizar los productos.");

            //$productos['idPlan']=mysqli_insert_id($db->conexion);
        }

        //return $productos;
    }


}

?>