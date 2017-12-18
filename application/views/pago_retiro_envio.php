<!--Pago-Retiro-Envio-->
<div class="container hidden-xs hidden-sm">
    <div class="row checkout">
        <div class="col-xs-4 col-sm-4 col-md-4 box-checkout">
            <div class="row checkout-margin">
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <img src="<?php echo base_url(); ?>assets/img/iconos/pago.png" alt="pago" height="35px" width="auto">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <a href="medios_pago" target="_blank" onclick="verMediosPago()">
                        <b>Pag&aacute; con tarjeta de cr&eacute;dito y d&eacute;bito</b>
                        <br>
                        <span class="hidden-xs hidden-sm"><small><i>Ver todos los medios de pago</i></small></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 box-checkout box-checkout-border">
            <div class="row checkout-margin">
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <img src="<?php echo base_url(); ?>assets/img/iconos/retiro.png" alt="retiro" height="35px" width="auto">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 link-checkout">
                    <a href="#" data-toggle="modal" data-target="#sucursales"><b> Retir&aacute; en nuestras sucursales</b></a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 box-checkout">
            <div class="row checkout-margin">
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <img src="<?php echo base_url(); ?>assets/img/iconos/envio.png" alt="envio" height="35px" width="auto">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 link-checkout">
                    <b> Env&iacute;os a todo el pa&iacute;s</b>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container hidden-md hidden-lg">
    <div class="row checkout">
        <div class="col-xs-4 col-sm-4">
            <div class="checkout-margin">
                <img src="<?php echo base_url(); ?>assets/img/iconos/pago.png" alt="pago" height="35px" width="auto">
                <div class="container checkout-margin">
                    <a href="#" onclick="verMediosPago()"><b>Pagos con cr�dito y d�bito</b></a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 ">
            <div class="checkout-margin">
                <img src="<?php echo base_url(); ?>assets/img/iconos/retiro.png" alt="retiro" height="35px" width="auto">
                <div class="container checkout-margin">
                    <a href="#" data-toggle="modal" data-target="#sucursales"><b> Retir� en tu sucursal</b></a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 ">
            <div class="checkout-margin">
                <img src="<?php echo base_url(); ?>assets/img/iconos/envio.png" alt="envio" height="35px" width="auto">
                <div class="container checkout-margin">
                    <b> Env�os a todo el pais</b>
                </div>
            </div>
        </div>
    </div>
</div>


