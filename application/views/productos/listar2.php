<div class="row contenido">

    <div class="col-md-3 contenido filtro">
        <div class="container">
            <h2>Filtrar por</h2>
            <div class="panel-group" id="accordion">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> Marca </a>
                        </h4>
                    </div>
                    <ul id="collapse1" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <?php foreach($marcas AS $marca): ?>
                                <li class="list-group-item">
                                   <a href="filtrar?marca=<?php echo $marca["nombre"]; ?>&rubro=<?php echo $rubro; ?>"><?php echo $marca["nombre"]; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> Modelo </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                        <?php foreach($productos AS $producto): ?>

                            <li class="list-group-item">
                                <a href="#" target="_blank"><?php echo $producto["titulo"]; ?></a>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="panel">
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
            </div>

            <div class="panel">
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
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"> Precio </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

        <!--table class="table">
            <thead>
            <tr>
                <th>Filtrar por</th>
            </tr>
            </thead>

            <tbody class="text-center">
            <tr>
                <td>Marca</td>
            </tr>
            <tr>
                <td>Modelo</td>
            </tr>
            <tr>
                <td>Color</td>
            </tr>
            <tr>
                <td>Talle</td>
            </tr>
            <tr>
                <td>Precio</td>
            </tr>
            </tbody>
        </table-->
    </div>

    <div class="col-md-9 container contenido">

        <div class="row">
            <div class="col-md-12 filtro-barra" id="filtro-barra">
                Cascos> Abiertos> Shoei
            </div>
        </div>

        <div class="row">

        <?php foreach($productos AS $producto): ?>

           <div class="">
            <div class="thumbnail thumbnail-producto">
                <img src="<?php echo base_url(); ?>assets/img/productos/<?php echo $producto["img"]; ?>" alt="baul" height="auto" width="auto">
                <div class="caption">
                    <div class="text-center">
                        <a href="#" target="_blank"><?php echo $producto["titulo"]; ?></a>
                        <p class="descripcion">Pilot 1.1 Graphic B White</p>
                        <p><strike>$2000</strike> <?php echo $producto["precio"]; ?> <span class="label label-danger">10% OFF</span></p>
                    </div>
                </div>
            </div>
           </div>

        <?php endforeach; ?>
        </div>
    </div>
</div>