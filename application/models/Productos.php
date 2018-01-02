<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "Database.php";
require_once "mercadopago.php";

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

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "modelo", "talle", "destacado", "publicado", "img"));
        $i=0;
        while($producto = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["sku"]=$producto["sku"];
            $productos[$i]["titulo"]=$producto["titulo"];
            $productos[$i]["stock"]=$producto["stock"];
            $productos[$i]["precio"]=$producto["precio"];
            $productos[$i]["rubro"]=$producto["rubro"];
            $productos[$i]["marca"]=$producto["marca"];
            $productos[$i]["modelo"]=$producto["modelo"];
            $productos[$i]["talle"]=$producto["talle"];
            $productos[$i]["destacado"]=$producto["destacado"];
            $productos[$i]["publicado"]=$producto["publicado"];
            $productos[$i]["img"]=$producto["img"];
            $i++;
        }
        return $productos;
    }


    public function listar_cat($categoria)
    {
        $db=new database();
        $db->conectar();

        if($categoria=="accesorios")
        {
            $consulta="SELECT *
                       FROM Productos
                       WHERE rubro = '$categoria'
                       OR rubro = 'Calzado'
                       AND publicado = true;";
        }
        else
            {
                $consulta="SELECT *
                           FROM Productos
                           WHERE rubro = '$categoria'
                           AND publicado = true;";
            }

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los productos por categoria.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "modelo", "talle", "destacado", "publicado", "img"));
        $i=0;
        while($producto = mysqli_fetch_assoc($resultado))
        {
            $productos[$i]["sku"]=$producto["sku"];
            $productos[$i]["titulo"]=$producto["titulo"];
            $productos[$i]["stock"]=$producto["stock"];
            $productos[$i]["precio"]=$producto["precio"];
            $productos[$i]["rubro"]=$producto["rubro"];
            $productos[$i]["marca"]=$producto["marca"];
            $productos[$i]["modelo"]=$producto["modelo"];
            $productos[$i]["talle"]=$producto["talle"];
            $productos[$i]["destacado"]=$producto["destacado"];
            $productos[$i]["publicado"]=$producto["publicado"];
            $productos[$i]["img"]=$producto["img"];
            $i++;
        }
        return $productos;
    }


    //Busca las marcas de una categoria
    public function filtrar_marcas($categoria)
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT DISTINCT marca
			       FROM Productos
			       WHERE rubro = '$categoria';";
        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pudo armar los filtros de marca por categoria.");

        if(mysqli_num_rows($resultado)==0)
        {
            $mensaje=false;
            return $mensaje;
        }
        else{
                $i = 0;
                while ($producto = mysqli_fetch_assoc($resultado))
                {
                    $marcas[$i]["nombre"] = $producto["marca"];
                    $i++;
                }
                return $marcas;
            }
    }

    //Busca los modelos de una categoria
    public function filtrar_modelos($categoria)
    {
        $db=new database();
        $db->conectar();

        $consulta="SELECT DISTINCT modelo
			       FROM Productos
			       WHERE rubro = '$categoria';";
        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pudo armar los filtros de modelo por categoria.");

        if(mysqli_num_rows($resultado)==0)
        {
            $mensaje=false;
            return $mensaje;
        }
        else{
                $i=0;
                while($producto = mysqli_fetch_assoc($resultado))
                {
                    $modelos[$i]["nombre"]=$producto["modelo"];
                    $i++;
                }
                return $modelos;
            }
    }

    //Busca los productos de acuerdo a los filtros elegidos
    public function filtrar($filtrado)
    {
        $db=new database();
        $db->conectar();

        if(isset($filtrado["sku"]))
        {
            $consulta='SELECT *
                       FROM Productos
                       WHERE sku = "'.$filtrado["sku"].'";';
        }

        if(isset($filtrado["marca"]))
        {
            $consulta='SELECT *
                       FROM Productos
                       WHERE rubro = "'.$filtrado["rubro"].'"
                       AND marca = "'.$filtrado["marca"].'"
                       AND publicado = true;';
        }

        if(isset($filtrado["modelo"]))
        {
            $consulta='SELECT *
                       FROM Productos
                       WHERE rubro = "'.$filtrado["rubro"].'"                     
                       AND modelo = "'.$filtrado["modelo"].'"
                       AND publicado = true;';
        }

        if(isset($filtrado["buscado"]))
        {
            $consulta='SELECT *
                       FROM Productos
                       WHERE rubro LIKE "%'.$filtrado["buscado"].'%"
                       OR marca LIKE "%'.$filtrado["buscado"].'%"
                       OR modelo LIKE "%'.$filtrado["buscado"].'%"
                       AND publicado = true;';
        }

        //echo $consulta;
        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se puede filtrar.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "modelo", "talle", "destacado", "publicado", "img"));

        if(mysqli_num_rows($resultado)==0)
        {
            $mensaje=false;
            return $mensaje;
        }
        else{
                $i=0;
                while($producto = mysqli_fetch_assoc($resultado))
                {
                    $productos[$i]["sku"]=$producto["sku"];
                    $productos[$i]["titulo"]=$producto["titulo"];
                    $productos[$i]["stock"]=$producto["stock"];
                    $productos[$i]["precio"]=$producto["precio"];
                    $productos[$i]["rubro"]=$producto["rubro"];
                    $productos[$i]["marca"]=$producto["marca"];
                    $productos[$i]["modelo"]=$producto["modelo"];
                    $productos[$i]["talle"]=$producto["talle"];
                    $productos[$i]["destacado"]=$producto["destacado"];
                    $productos[$i]["publicado"]=$producto["publicado"];
                    $productos[$i]["img"]=$producto["img"];
                    $i++;
                }
                return $productos;
            }

    }


    public function destacados()
    {
        $db=new database();
        $db->conectar();
		
        $consulta="SELECT *
			       FROM Productos
			       WHERE destacado=1;";

        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pueden mostrar los productos destacados.");

        $productos = array(array("sku", "titulo", "stock", "precio", "rubro", "marca", "destacado", "img"));
        $i=0;
		
		if(mysqli_num_rows($resultado)!=0)
		{
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
		}
		else{
				$productos[$i]=NULL;				
			}
        
		
        return $productos;
    }


    public function guardar($upload_data, $producto)
    {
        //echo $upload_data["file_name"];
        $db=new database();
        $db->conectar();
        
        $consulta = 'INSERT INTO Productos (sku,
                                            titulo,
                                            stock,
                                            precio,
                                            rubro,
                                            marca,
                                            modelo,
                                            talle,
                                            destacado,
                                            publicado,
                                            img)
                     VALUES("' . $producto["sku"] . '",
                            "' . $producto["titulo"] . '",
                            "' . $producto["stock"] . '",
                            "' . $producto["precio"] . '",
                            "' . $producto["rubro"] . '",
                            "' . $producto["marca"] . '",
                            "' . $producto["modelo"] . '",
                            "' . $producto["talle"] . '",
                            "' . $producto["destacado"] . '",
                            "' . $producto["publicado"] . '",
                            "' . $upload_data["file_name"] . '")';		
        		
		if (!mysqli_query($db->conexion, $consulta))
			  {
			  echo("Error description: " . mysqli_error($db->conexion));
			  $resultado=mysqli_query($db->conexion, $consulta) or die ("No se pudo guardar el producto.");
			  }
        
    }


    public function guardar_archivo($upload_data)
    {
        $db = new database();
        $db->conectar();

        if (($fichero = fopen("uploads/".$upload_data["file_name"]."", "r")) !== FALSE)
        {
            while (($datos = fgetcsv($fichero, 1000)) !== FALSE)
            {
                $consulta = 'INSERT INTO Productos (sku,
                                                    titulo,
                                                    stock,
                                                    precio,
                                                    rubro,
                                                    marca,
                                                    modelo,
                                                    talle,
                                                    destacado,
                                                    publicado,
                                                    img)
                             VALUES("' . $datos["0"] . '",
                                    "' . $datos["1"] . '",
                                    "' . $datos["2"] . '",
                                    "' . $datos["3"] . '",
                                    "' . $datos["4"] . '",
                                    "' . $datos["5"] . '",
                                    "' . $datos["6"] . '",
                                    "' . $datos["7"] . '",
                                    "' . $datos["8"] . '",
                                    "' . $datos["9"] . '",
                                    "' . $upload_data["file_name"] . '")';
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
                       SET  titulo = "'.$producto['titulo'].'",
                            stock = "'.$producto['stock'].'",
                            precio = "'.$producto['precio'].'",
                            rubro = "'.$producto['rubro'].'",
                            marca = "'.$producto['marca'].'",
                            modelo = "' . $producto["modelo"] . '",
                            talle = "' . $producto["talle"] . '",
                            publicado = "' . $producto["publicado"] . '",
                            destacado = "'.$producto['destacado'].'",
                            img="'.$producto['img'].'"
                       WHERE sku = "'.$producto['sku'].'";';
            $resultado=mysqli_query($db->conexion, $consulta)
            or die ("No se pudo actualizar los productos.");

            //$productos['idPlan']=mysqli_insert_id($db->conexion);
        }

        //return $productos;
    }


    public function buscar_sku($sku)
    {
        $db=new database();
        $db->conectar();

        $consulta='SELECT *
                   FROM Productos
                   WHERE sku = "'.$sku.'";';

        //echo $consulta;
        $resultado=mysqli_query($db->conexion, $consulta)
        or die ("No se pudo encontrar el articulo por sku.");

        $producto = array("sku", "titulo", "stock", "precio", "rubro", "marca", "modelo", "talle", "destacado", "publicado", "img");

        while($encontrado = mysqli_fetch_assoc($resultado))
        {
            $producto["sku"]=$encontrado["sku"];
            $producto["titulo"]=$encontrado["titulo"];
            $producto["stock"]=$encontrado["stock"];
            $producto["precio"]=$encontrado["precio"];
            $producto["rubro"]=$encontrado["rubro"];
            $producto["marca"]=$encontrado["marca"];
            $producto["modelo"]=$encontrado["modelo"];
            $producto["talle"]=$encontrado["talle"];
            $producto["destacado"]=$encontrado["destacado"];
            $producto["publicado"]=$encontrado["publicado"];
            $producto["img"]=$encontrado["img"];
        }
        return $producto;
    }


    public function exportar()
    {
        $productos = $this->listar();

        //$file = fopen("productos.csv","w");
        $file = fopen("php://output","w");

        foreach ($productos as $producto)
        {
            //fputcsv($file,explode(',',$producto["titulo"]));
            fputcsv($file, $producto);
        }

        fclose($file);
    }
}
?>