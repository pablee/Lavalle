<!--Productos y categorias-->
<div class="container contenido">

    <!--Productos destacados-->
    <div class="row hidden-xs hidden-sm margin-hottom">
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
                    <a href="producto?sku=<?php echo $destacado["sku"]; ?>" class="btn btn-danger btn-xs">Ver m&aacutes</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="row hidden-md hidden-lg margin-bottom">
        <div class="col-xs-12 col-sm-12">
            <div id="carousel-destacados" class="carousel" data-ride="carousel" >
                <div class="text-center">
                    <h4>PRODUCTOS DESTACADOS</h4>
                </div>

                <!-- Indicators -->
                <!--ol class="carousel-indicators">
                    <li data-target="#carousel-marcas" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-marcas" data-slide-to="1"></li>
                    <li data-target="#carousel-marcas" data-slide-to="2"></li>
                    <li data-target="#carousel-marcas" data-slide-to="3"></li>
                    <li data-target="#carousel-marcas" data-slide-to="4"></li>
                </ol-->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $i=0; ?>
                    <?php foreach($destacados AS $destacado): ?>
                        <?php
                        if($i==0)
                        {
                            echo '<div class="item active">';
                            $i=1;
                        }
                        else{
                            echo '<div class="item">';
                            }
                        ?>

                            <div class="thumbnail thumbnail-producto">
                                <img src="<?php echo base_url(); ?>uploads/img/productos/<?php echo $destacado["img"]; ?>" alt="baul" height="auto" width="auto">
                                <div class="caption">
                                    <div class="text-center">
                                        <?php echo $destacado["titulo"]?>
                                    </div>
                                    <a href="producto?sku=<?php echo $destacado["sku"]; ?>" class="btn btn-danger btn-xs">Ver m&aacutes</a>
                                </div>
                            </div>

                        <?php echo '</div>' ?>
                    <?php endforeach; ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel-destacados" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-destacados" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <div class="row" style="height: 50px; background-color: #dbd8d7;">
    </div>

    <!--Categorias-->
    <div class="row hidden-xs hidden-sm margin-hottom">
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
                                <div class="col-md-6 ">
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
                                <div class="col-md-6 ">
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
                                <div class="col-md-6">
                                    +Ver m&aacute;s
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row hidden-md hidden-lg margin-bottom">
        <div class="col-xs-12 col-sm-12">
            <div id="carousel-categorias" class="carousel" data-ride="carousel" >
                <div class="text-center">
                    <h4>CATEGORIAS</h4>
                </div>

                <!-- Indicators -->
                <!--ol class="carousel-indicators">
                    <li data-target="#carousel-marcas" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-marcas" data-slide-to="1"></li>
                    <li data-target="#carousel-marcas" data-slide-to="2"></li>
                    <li data-target="#carousel-marcas" data-slide-to="3"></li>
                    <li data-target="#carousel-marcas" data-slide-to="4"></li>
                </ol-->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="thumbnail thumbnail-categoria">
                            <img src="<?php echo base_url(); ?>assets/img/categorias/cascos_moto_cross.jpg" alt="cascos">
                            <a href="categoria?rubro=cascos">
                                <div class="row caption caption-tag">
                                    <div class="col-xs-6 col-sm-6">
                                        Cascos
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        +Ver m&aacute;s
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail thumbnail-categoria">
                            <img src="<?php echo base_url(); ?>assets/img/categorias/cat_indumentaria.jpg" alt="indumentaria">
                            <a href="categoria?rubro=indumentaria">
                                <div class="row caption caption-tag">
                                    <div class="col-xs-6 col-sm-6">
                                        Indumentaria
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        +Ver m&aacute;s
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail thumbnail-categoria">
                            <img src="<?php echo base_url(); ?>assets/img/categorias/cat_accesorios.jpg" alt="accesorios">
                            <a href="categoria?rubro=accesorios">
                                <div class="row caption caption-tag">
                                    <div class="col-xs-6 col-sm-6">
                                        Accesorios
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        +Ver m&aacute;s
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail thumbnail-categoria">
                            <img src="<?php echo base_url(); ?>assets/img/categorias/motos.jpg" alt="moto">
                            <a href="categoria?rubro=motos">
                                <div class="row caption caption-tag">
                                    <div class="col-xs-6 col-sm-6">
                                        Motos
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        +Ver m&aacute;s
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel-categorias" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-categorias" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="row hidden-xs hidden-sm" style="height: 50px; background-color: #dbd8d7;">
    </div>
</div>


