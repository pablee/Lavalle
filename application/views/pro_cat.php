<!--Productos y categorias-->
<div class="container contenido">
    <!--Productos destacados-->
    <div class="row margin-hottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>PRODUCTOS DESTACADOS</h3>
            </div>
        </div>

        <div class="row container-productos">
        <?php foreach($destacados AS $destacado): ?>

            <div class="col-md-2 thumbnail thumbnail-producto">
                <img src="<?php echo base_url(); ?>uploads/img/productos/<?php echo $destacado["img"]; ?>" alt="baul" height="auto" width="auto">
                <div class="caption">
                    <div class="text-center">
                        <?php echo $destacado["titulo"]?>
                    </div>
                    <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                </div>
            </div>

        <?php endforeach; ?>

        </div>
    </div>

    <div class="row" style="height: 50px; background-color: #dbd8d7;">
    </div>

    <!--Categorias-->
    <div class="row margin-hottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>CATEGORIAS</h3>
            </div>
        </div>

        <div class="container text-left">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail thumbnail-categoria">
                        <img src="<?php echo base_url(); ?>assets/img/categorias/cascos_moto_cross.jpg" alt="cascos">
                        <a href="categoria?rubro=cascos">
                            <div class="row caption caption-tag">
                                <div class="col-md-6">
                                    Cascos
                                </div>
                                <div class="col-md-6">
                                    +Ver m&aacute;s
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail thumbnail-categoria">
                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_indumentaria.jpg" alt="indumentaria">
                        <a href="categoria?rubro=indumentaria">
                            <div class="row caption caption-tag">
                                <div class="col-md-6">
                                    Indumentaria
                                </div>
                                <div class="col-md-6 text-right">
                                    +Ver m&aacute;s
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail thumbnail-categoria">
                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_accesorios.jpg" alt="accesorios">
                        <a href="categoria?rubro=accesorios">
                            <div class="row caption caption-tag">
                                <div class="col-md-6 ">
                                    Accesorios
                                </div>
                                <div class="col-md-6 text-right">
                                    +Ver m&aacute;s
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail thumbnail-categoria">
                        <img src="<?php echo base_url(); ?>assets/img/categorias/motos.jpg" alt="moto">
                        <a href="categoria?rubro=motos">
                            <div class="row caption caption-tag">
                                <div class="col-md-6">
                                    Motos
                                </div>
                                <div class="col-md-6 text-right">
                                    +Ver m&aacute;s
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row" style="height: 50px; background-color: #dbd8d7;">
    </div>
</div>


