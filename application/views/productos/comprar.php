<div class="row">
    <div class="col-md-12">
        <div class="thumbnail thumbnail-producto">
            <img src="<?php echo base_url(); ?>assets/img/productos/<?php echo $producto["img"]; ?>" alt="baul" height="auto" width="auto">
            <div class="caption">
                <div class="text-center">
                    <a href="#" target="_blank"><?php echo $titulo; ?></a>
                    <p class="descripcion">Pilot 1.1 Graphic B White</p>
                    <p> <?php echo $precio; ?> </p>
                    <a class="btn btn-danger" href="<?php echo $preference['response']['sandbox_init_point']; ?>">Pagar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--a href="<?php echo $preference['response']['init_point']; ?>">Pay</a-->
