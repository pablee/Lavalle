
    <!--Nosotros-->
    <div class="container-fluid row nosotros">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#" onclick="verMediosPago()">Medios de pago</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#garantia">Garant&iacute;a</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#post_venta">Servicio post venta</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#venta_corporativa"> Ventas corporativas</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login">Backoffice</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Preguntas Frecuentes</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#rrhh">RR HH</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#sucursales">Sucursales</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 25%;">
                            Seguinos!!
                            <a href="https://www.facebook.com/lavalle.motos.oficial/" target="_blank">
                                <img src="<?php echo base_url(); ?>assets/img/iconos/facebook.png" alt="facebook" height="35px" width="35px">
                            </a>
                            <img src="<?php echo base_url(); ?>assets/img/iconos/youtube.png" alt="facebook" height="35px" width="35px">
                    </div>
                </div>

                <div class="row" style="border-bottom: solid; border-bottom-width: 2px; border-color: #d10404; margin-top: 10px; margin-bottom: 10px;"></div>

                <div class="row hidden-xs hidden-sm">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-left: 25%;">
                        <img src="<?php echo base_url(); ?>assets/img/marcas/triunfo_seguros.png" alt="facebook" height="90px" width="90px">
                        <img src="<?php echo base_url(); ?>assets/img/marcas/moto_auxilio.png" alt="facebook" height="90px" width="90px">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-inline">
                    <h4>Recib&iacute; ofertas y promociones por email</h4>
                    <div class="hidden-xs hidden-sm">
                        <form method="post" action="suscripcion">
                            <input type="text" class="form-control" name="correo" placeholder="Ingres&aacute; tu email">
                            <button type="submit" class="btn btn-danger" style="margin-left:20px;">Suscribite</button>
                        </form>
                    </div>
                    <div class="hidden-md hidden-lg">
                        <form method="post" action="suscripcion">
                            <input type="text" class="form-control" name="correo" placeholder="Ingres&aacute; tu email">
                            <br>
                            <button type="submit" class="btn btn-danger btn-block">Suscribite</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>