    <!--Logo-Busqueda-Login-Carrito-->
    <div class="container">
        <div class="row text-center busqueda_rapida">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="/">
                    <img src="<?php echo base_url(); ?>assets/img/iconos/logo_md.png" alt="logo" height="75" width="auto">
                </a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 input-buscar-producto">
                <form method="post" action="filtrar">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control input-lg" name="buscado" placeholder="Buscar producto">
                        <span type="submit" class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 login-carrito" style="margin-bottom: 15px;">
                <a href="#" onclick="login()"><img src="<?php echo base_url(); ?>assets/img/iconos/login.png" alt="login" class="centrado" height="35px" width="35px">Ingresar a mi cuenta</a>
                <!--a href="#" onclick="carrito()"><img src="<?php echo base_url(); ?>assets/img/iconos/carrito.png" alt="carrito" class="centrado" height="35px" width="35px">Ver carrito</a-->
                <a href="https://lavallemotos.mercadoshops.com.ar" target="_blank"><img src="<?php echo base_url(); ?>assets/img/iconos/carrito.png" alt="carrito" class="centrado" height="35px" width="35px">Ver carrito</a>
            </div>
        </div>
    </div>