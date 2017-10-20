
    <div id="contenido">
        <!--Carousel banner-->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url(); ?>assets/img/banners/banner_01.jpg" alt="banner_1" style="height:400px; width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/img/banners/banner_01.jpg" alt="banner_2" style="height:400px; width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/img/banners/banner_01.jpg" alt="banner_3" style="height:400px; width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Pago-Retiro-Envio-->
        <div class="container">
            <div class="row checkout">
                <div class="col-md-4 box-checkout">
                    <div class="checkout-margin">
                        <div class="col-md-2">
                            <img src="<?php echo base_url(); ?>assets/img/iconos/pago.png" alt="pago" height="35px" width="auto">
                        </div>
                        <div class="col-md-10 text-left">
                            <a href="#" onclick="verMediosPago()">
                                <b>Pagá con tarjeta de crédito y débito</b>
                                <br><small><i>Ver todos los medios de pago</i></small>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 box-checkout box-checkout-border">
                    <div class="checkout-margin">
                        <div class="col-md-2">
                            <img src="<?php echo base_url(); ?>assets/img/iconos/retiro.png" alt="retiro" height="35px" width="auto">
                        </div>
                        <div class="col-md-10 text-left link-checkout">
                            <a href="#" data-toggle="modal" data-target="#sucursales"><b> Retirá en nuestras sucursales</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 box-checkout">
                    <div class="checkout-margin">
                        <div class="col-md-2">
                            <img src="<?php echo base_url(); ?>assets/img/iconos/envio.png" alt="envio" height="35px" width="auto">
                        </div>
                        <div class="col-md-10 text-left link-checkout">
                            <b> Envíos a todo el pais</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <div class="col-md-2 thumbnail thumbnail-producto">
                        <img src="<?php echo base_url(); ?>assets/img/productos/baul_coocase.jpg" alt="baul" height="auto" width="auto">
                        <div class="caption">
                            <div class="text-center">
                                Baùl Coocase
                            </div>
                            <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                        </div>
                    </div>

                    <div class="col-md-2 thumbnail thumbnail-producto">
                        <img src="<?php echo base_url(); ?>assets/img/productos/campera_octane.jpg" alt="campera" height="auto" width="auto">
                        <div class="caption">
                            <div class="text-center">
                                Campera Octane
                            </div>
                            <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                        </div>
                    </div>

                    <div class="col-md-2 thumbnail thumbnail-producto">
                        <img src="<?php echo base_url(); ?>assets/img/productos/casco_airoh.png" alt="casco" height="auto" width="auto">
                        <div class="caption">
                            <div class="text-center">
                                Casco Airoh
                            </div>
                            <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                        </div>
                    </div>

                    <div class="col-md-2 thumbnail thumbnail-producto">
                        <img src="<?php echo base_url(); ?>assets/img/productos/botas_sidi.jpg" alt="botas" height="auto" width="auto">
                        <div class="caption">
                            <div class="text-center">
                                Botas Sidi
                            </div>
                            <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                        </div>
                    </div>

                    <div class="col-md-2 thumbnail thumbnail-producto">
                        <img src="<?php echo base_url(); ?>assets/img/productos/guantes_octane.jpg" alt="baul" height="auto" width="auto">
                        <div class="caption">
                            <div class="text-center">
                                Guantes Octane
                            </div>
                            <a href="#" class="btn btn-danger btn-xs" target="_blank">Ver m&aacutes</a>
                        </div>
                    </div>
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
                                <a href="cascos">
                                    <div class="row caption caption-tag">
                                        <div class="col-md-6">
                                            Cascos
                                        </div>
                                        <div class="col-md-6">
                                            +Ver más
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail thumbnail-categoria">
                                <img src="<?php echo base_url(); ?>assets/img/categorias/indumentaria.jpg" alt="indumentaria">
                                <a href="#" onclick="cargarVista()">
                                    <div class="row caption caption-tag">
                                        <div class="col-md-6">
                                            Indumentaria
                                        </div>
                                        <div class="col-md-6 text-right">
                                            +Ver más
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail thumbnail-categoria">
                                <img src="<?php echo base_url(); ?>assets/img/categorias/accesorios.jpg" alt="accesorios">
                                <a href="#" onclick="cargarVista()">
                                    <div class="row caption caption-tag">
                                        <div class="col-md-6 ">
                                            Accesorios
                                        </div>
                                        <div class="col-md-6 text-right">
                                            +Ver más
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail thumbnail-categoria">
                                <img src="<?php echo base_url(); ?>assets/img/categorias/motos.jpg" alt="moto">
                                <a href="#" onclick="cargarVista()">
                                    <div class="row caption caption-tag">
                                        <div class="col-md-6">
                                            Motos
                                        </div>
                                        <div class="col-md-6 text-right">
                                            +Ver más
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

        <!--Carousel marcas-->
        <div class="container-fluid contenido">
            <div class="container">
                <div id="carousel-marcas" class="carousel carousel-marcas" data-ride="carousel" >
                    <div class="row margin-hottom">
                        <div class="col-md-12 text-center">
                            <h3>MARCAS DESTACADAS</h3>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-marcas" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-marcas" data-slide-to="1"></li>
                        <li data-target="#carousel-marcas" data-slide-to="2"></li>
                        <li data-target="#carousel-marcas" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-1">
                            </div>

                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-01.jpg" alt="marca-1" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-02.jpg" alt="marca-2" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-03.jpg" alt="marca-3" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-04.jpg" alt="marca-4" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-05.jpg" alt="marca-5" style="height:125px; width:100%;">
                            </div>

                            <div class="col-md-1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-1">
                            </div>

                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-06.jpg" alt="marca-6" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-07.jpg" alt="marca-7" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-08.jpg" alt="marca-8" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-09.jpg" alt="marca-09" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-10.jpg" alt="marca-10" style="height:125px; width:100%;">
                            </div>

                            <div class="col-md-1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-1">
                            </div>

                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-11.jpg" alt="marca-11" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-12.jpg" alt="marca-12" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-13.jpg" alt="marca-13" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-14.jpg" alt="marca-14" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-15.jpg" alt="marca-15" style="height:125px; width:100%;">
                            </div>

                            <div class="col-md-1">
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-16.jpg" alt="marca-16" style="height:125px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-17.jpg" alt="marca-17" style="height:150px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-18.jpg" alt="marca-18" style="height:150px; width:100%;">
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>assets/img/marcas/marca-19.jpg" alt="marca-19" style="height:150px; width:100%;">
                            </div>

                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#carousel-marcas" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-marcas" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--Horarios-->
        <div class="row text-center horarios">
            <div class="col-md-6">
                <h3>Venta telefónica +54 926 1709 2859</h3>
                <p>LUNES A VIERNES DE 9:30 A 21:30 HS. SÁBADOS DE 9:30 A 14 HS.</p>
            </div>
            <div class="col-md-6">
                <h3>Escribinos al mail</h3>
                <p>tiendaweb@lavallemotos.com.ar</p>
            </div>
        </div>

        <!--Mapa-->
        <div class="container margin-top margin-hottom">
            <div class="row text-center">
                <div class="col-md-4 buscar-local">
                    <h4>Buscá la sucursal mas cercana</h4>
                    <div class="form-group has-feedback" style="margin-bottom: 30px;">
                        <input type="text" class="form-control input-lg" placeholder="Localidad">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                    <img src="<?php echo base_url(); ?>assets/img/iconos/logo_md.png" alt="logo_md">
                </div>
                <div class="col-md-8">
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>
