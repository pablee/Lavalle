<?php

echo '<form name="grilla" method="POST" action="actualizar"';

foreach ($productos as $producto)
{
    if($producto["destacado"]==0)
    {
        $destacado="<option value=\"1\"> No </option>";
    }
    else{
        $destacado="<option value=\"1\"> Si </option>";
        }

    echo
    '	
    <tr>	  
        <td>
            <input type="text" class="form-control" id="" name="grilla['.$producto["sku"].'][sku]" value="'.$producto["sku"].'"></input>
        </td>
    
        <td>	
            <input type="text"   class="form-control" id="" name="grilla['.$producto["sku"].'][titulo]" value="'.$producto["titulo"].'" onchange="campoModificado('.$producto["sku"].')"></input>
        </td>
    
        <td>		
            <input type="text"   class="form-control" id="" name="grilla['.$producto["sku"].'][stock]" value="'.$producto["stock"].'" onchange="campoModificado('.$producto["sku"].')"></input>
        </td>
    
        <td>		
            <input type="text"   class="form-control" id="" name="grilla['.$producto["sku"].'][precio]" value="'.$producto["precio"].'" onchange="campoModificado('.$producto["sku"].')"></input>
        </td>
    
        <td>		
            <input type="text"   class="form-control" id="" name="grilla['.$producto["sku"].'][rubro]" value="'.$producto["rubro"].'" onchange="campoModificado('.$producto["sku"].')"></input>
        </td>
    
        <td>		
            <input type="text"   class="form-control" id="" name="grilla['.$producto["sku"].'][marca]" value="'.$producto["marca"].'" onchange="campoModificado('.$producto["sku"].')"></input>
        </td>
    
        <td>	    
            <select class="form-control" id="" name="grilla['.$producto["sku"].'][destacado]" onchange="campoModificado('.$producto["sku"].')">
                '.$destacado.'
                <option value="1"> Si </option>
                <option value="0"> No </option>
            </select>
        </td>    
        
        <td><input type="hidden" class="form-control" id="'.$producto["sku"].'-modificado" name="grilla['.$producto["sku"].'][modificado]" value="0"></input></td>
    ';
}

echo '<button type="submit" class="btn btn-primary">Guardar</button>';
echo '</form>';

?>