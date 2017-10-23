<?php

foreach($productos as $producto)
{
    if($producto["destacado"]==0)
    {
        $destacado="No";
    }
    else{
        $destacado="Si";
        }

    echo
        '	
	<tr>	   		
		<td>'.$producto["sku"].'</td>
		<td>'.$producto["titulo"].'</td>
		<td>'.$producto["stock"].'</td>		
		<td>'.$producto["precio"].'</td>
		<td>'.$producto["rubro"].'</td>
		<td>'.$producto["marca"].'</td>
		<td>'.$destacado.'</td>		
	</tr>
	';
}

?>