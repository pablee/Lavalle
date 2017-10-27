<div class="row contenido">

    <div class="col-md-3 contenido filtro">
        <div class="container">
            <h2>Filtrar por</h2>
            <!--Marca-->
            <div class="panel-group" id="accordion">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> Marca </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse ">
                        <ul class="list-group">
                            <?php foreach($filtros AS $filtro): ?>
                                <li class="list-group-item">
                                   <a href="filtrar?marca=<?php echo $filtro["marca"]; ?>&rubro=<?php echo $filtrado["rubro"]; ?>"><?php echo $filtro["marca"]; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Modelo-->
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> Modelo </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                        <?php foreach($filtros AS $filtro): ?>
                            <li class="list-group-item">
                                <a href="filtrar?modelo=<?php echo $filtro["modelo"]; ?>&rubro=<?php echo $filtro["rubro"]; ?>"><?php echo $filtro["modelo"]; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!--Color-->
            <!--div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> Color </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item">Rojo</li>
                        <li class="list-group-item">Verde</li>
                        <li class="list-group-item">Amarillo</li>
                    </ul>
                </div>
            </div-->

            <!--Talle-->
            <!--div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"> Talle </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li class="list-group-item">L</li>
                        <li class="list-group-item">M</li>
                        <li class="list-group-item">S</li>
                    </ul>
                </div>
            </div-->

            <!--Precio-->
            <!--div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"> Precio </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div-->
        </div>
    </div>

    <div class="col-md-9 container contenido">

        <div class="row">
            <div class="col-md-12 filtro-barra" id="filtro-barra">
                <a href="categoria?rubro=<?php echo $filtrado["rubro"]; ?>"> <?php echo ucwords($filtrado["rubro"]);?> </a>
                > <?php echo ucwords($filtrado["marca"]); ?>
                > <?php echo ucwords($filtrado["modelo"]); ?>
            </div>
        </div>

        <div class="row" style="margin-top: 2%;">

        <?php foreach($productos AS $producto): ?>

           <div class="col-md-3">
            <div class="thumbnail thumbnail-producto">
                <img src="<?php echo base_url(); ?>assets/img/productos/<?php echo $producto["img"]; ?>" alt="baul" height="auto" width="auto">
                <div class="caption">
                    <div class="text-center">
                        <a href="#" target="_blank"><?php echo $producto["titulo"]; ?></a>
                        <p class="descripcion">Pilot 1.1 Graphic B White</p>
                        <p><!--strike>$2000</strike--> <?php echo $producto["precio"]; ?> <!--span class="label label-danger">10% OFF</span--></p>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#comprar_<?php echo $producto["sku"]; ?>">Lo quiero!</button>
                    </div>
                </div>
            </div>
           </div>

        <?php
        $i++;
            if($i == 4)
            {
                $i=0;
                echo '</div><div class="row">';
            }

        ?>
        <?php endforeach; ?>
        </div>
    </div>
</div>