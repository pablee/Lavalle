<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="thumbnail thumbnail-producto" style="padding: 30px 0px;">
            <img src="<?php echo base_url(); ?>uploads/img/productos/<?php echo $producto["img"]; ?>" alt="baul" height="auto" width="auto">
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