<div class="row contenido">

    <div class="col-md-3 contenido filtro">
        <table class="table">
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
        </table>

    </div>

    <div class="col-md-9 container contenido">


        <div class="row">
            <div class="col-md-12 filtro-barra" id="filtro-barra">
                Cascos> Abiertos> Shoei
            </div>
        </div>


        <?php foreach($productos AS $producto): ?>
           <div class="col-md-3">
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