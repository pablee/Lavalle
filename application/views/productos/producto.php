<div class="row">
    <div class="col-md-12">
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
</div>