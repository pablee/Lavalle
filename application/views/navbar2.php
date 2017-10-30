    <!--Barra de navegacion-->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container text-center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motos</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white">
                                    <div class="col-xs-1 col-sm-1 col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-5 col-sm-2 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php foreach($motos_modelos AS $moto_modelo): ?>
                                            <li><a href="filtrar?modelo=<?php echo $moto_modelo["nombre"]; ?>&rubro=motos"><?php echo ucwords($moto_modelo["nombre"]); ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="filtrar?modelo=cuatriciclos&rubro=motos">Cuatriciclos</a></li>
                                        <li><a href="filtrar?modelo=cubs&rubro=motos">Cubs</a></li>
                                        <li><a href="filtrar?modelo=custom&rubro=motos">Custom</a></li>
                                        <li><a href="filtrar?modelo=enduro&rubro=motos">Enduro</a></li>
                                        <li><a href="filtrar?modelo=enduro-calle&rubro=motos">Enduro - Calle</a></li>
                                        <li><a href="filtrar?modelo=scooters&rubro=motos">Scooters</a></li>
                                        <li><a href="filtrar?modelo=streets&rubro=motos">Streets</a></li>
                                        <li><a href="filtrar?modelo=utilitarios&rubro=motos">Utilitarios</a></li>
                                        <br>
                                    </div>
                                    <div class="col-xs-5 col-sm-2 col-md-2 margin-top">
                                        <li><b>Alta gama</b></li>
                                        <?php foreach($motos_marcas AS $moto_marca): ?>
                                            <li><a href="filtrar?marca=<?php echo $moto_marca["nombre"]; ?>&rubro=motos"><?php echo ucwords($moto_marca["nombre"]); ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="filtrar?marca=yamaha&rubro=motos">Yamaha</a></li>
                                        <li><a href="filtrar?marca=kawasaki&rubro=motos">Kawasaki</a></li>
                                        <li><a href="filtrar?marca=suzuki&rubro=motos">Suzuki</a></li>
                                        <li><a href="filtrar?marca=benelli&rubro=motos">Benelli</a></li>
                                    </div>
                                    <div class="hidden-xs col-md-7 text-right" style="padding: 0px;">
                                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_moto.png" alt="casco" width="300" height="300">
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cascos</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php foreach($cascos_modelos AS $casco_modelo): ?>
                                            <li><a href="filtrar?modelo=<?php echo $casco_modelo["nombre"]; ?>&rubro=cascos"><?php echo ucwords($casco_modelo["nombre"]); ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="#">Abiertos</a></li>
                                        <li><a href="#">Motocross</a></li>
                                        <li><a href="#">Integrales</a></li>
                                        <li><a href="#">Rebatibles</a></li>
                                        <li><a href="#">Modulares</a></li>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <li><b>Marcas</b></li>
                                        <li><a href="filtrar?marca=acerbis&rubro=cascos">Acerbis</a></li>
                                        <li><a href="filtrar?marca=agv&rubro=cascos">Agv</a></li>
                                        <li><a href="filtrar?marca=airoh&rubro=cascos">Airoh</a></li>
                                        <li><a href="filtrar?marca=arai&rubro=cascos">Arai</a></li>
                                        <li><a href="filtrar?marca=benelli&rubro=cascos">Benelli</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <br>
                                        <li><a href="filtrar?marca=beon&rubro=cascos">Beon</a></li>
                                        <li><a href="filtrar?marca=fox&rubro=cascos">Fox</a></li>
                                        <li><a href="filtrar?marca=givi&rubro=cascos">Givi</a></li>
                                        <li><a href="filtrar?marca=hjc&rubro=cascos">Hjc</a></li>
                                        <li><a href="filtrar?marca=ls2&rubro=cascos">Ls2</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <br>
                                        <li><a href="filtrar?marca=momo&rubro=cascos">Momo</a></li>
                                        <li><a href="filtrar?marca=nzi&rubro=cascos">Nzi</a></li>
                                        <li><a href="filtrar?marca=origine&rubro=cascos">Origine</a></li>
                                        <li><a href="filtrar?marca=peels&rubro=cascos">Peels</a></li>
                                        <li><a href="filtrar?marca=schuberth&rubro=cascos">Schuberth</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <br>
                                        <li><a href="filtrar?marca=shiro&rubro=cascos">Shiro</a></li>
                                        <li><a href="filtrar?marca=shoei&rubro=cascos">Shoei</a></li>
                                        <li><a href="filtrar?marca=v-can&rubro=cascos">V-can</a></li>
                                    </div>
                                    <div class="hidden-xs hidden-sm col-md-5 text-right" style="padding: 0px;">
                                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_casco.png" alt="casco" width="300" height="300">
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Indumentaria</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php foreach($indumentaria_modelos AS $indumentaria_modelo): ?>
                                            <li><a href="filtrar?modelo=<?php echo $indumentaria_modelo["nombre"]; ?>&rubro=indumentaria"><?php echo ucwords($indumentaria_modelo["nombre"]); ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="#">Pista</a></li>
                                        <li><a href="#">Touring</a></li>
                                        <li><a href="#">Enduro-cross</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Marcas</b></li>
                                        <li><a href="filtrar?marca=Acerbis&rubro=indumentaria">Acerbis</a></li>
                                        <li><a href="filtrar?marca=Fox&rubro=indumentaria">Fox</a></li>
                                        <li><a href="filtrar?marca=Joe rocket&rubro=indumentaria">Joe rocket</a></li>
                                        <li><a href="filtrar?marca=Motorman&rubro=indumentaria">Motorman</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <br>
                                        <li><a href="filtrar?marca=octane&rubro=indumentaria">Octane</a></li>
                                        <li><a href="filtrar?marca=rpmcroos&rubro=indumentaria">Rpmcroos</a></li>
                                        <li><a href="filtrar?marca=shift&rubro=indumentaria">Shift</a></li>
                                        <li><a href="filtrar?marca=yamaha&rubro=indumentaria">Yamaha</a></li>
                                    </div>

                                    <div class="hidden-xs hidden-sm col-md-6 text-right" style="padding: 0px;">
                                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_indumentaria.jpg" alt="casco" width="300" height="300">
                                    </div>

                                </div>
                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calzado</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php foreach($calzado_modelos AS $calzado_modelo): ?>
                                            <li><a href="filtrar?modelo=<?php echo $calzado_modelo["nombre"]; ?>&rubro=calzado"><?php echo ucwords($calzado_modelo["nombre"]); ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="#">Pista</a></li>
                                        <li><a href="#">Motocross</a></li>
                                        <li><a href="#">Touring</a></li>
                                        <li><a href="#">Enduro-cross</a></li>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Marcas</b></li>
                                        <li><a href="filtrar?marca=acerbis&rubro=calzado">Acerbis</a></li>
                                        <li><a href="filtrar?marca=cros Roads&rubro=calzado">Cros Roads</a></li>
                                        <li><a href="filtrar?marca=forma&rubro=calzado">Forma</a></li>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-1 margin-top">
                                        <br>
                                        <li><a href="filtrar?marca=fox&rubro=calzado">Fox</a></li>
                                        <li><a href="filtrar?marca=gaerne&rubro=calzado">Gaerne</a></li>
                                        <li><a href="filtrar?marca=sidi&rubro=calzado">Sidi</a></li>
                                    </div>
                                    <div class="hidden-xs hidden-sm col-md-6 text-right" style="padding: 0px;">
                                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_botas.png" alt="casco" width="300" height="300">
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesorios</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white">
                                    <div class="col-md-1"></div>

                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Accesorios</b></li>
                                        <li><a href="filtrar?modelo=antiparras&rubro=motos">Antiparras</a></li>
                                        <li><a href="filtrar?modelo=bauleras&rubro=motos">Bauleras</a></li>
                                        <li><a href="filtrar?modelo=intercomunicadores&rubro=accesorios">Intercomunicadores</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Cubiertas</b></li>
                                        <li><a href="filtrar?modelo=motocross&rubro=accesorios">Motocross</a></li>
                                        <li><a href="filtrar?modelo=cuatri&rubro=accesorios">Cuatri</a></li>
                                        <li><a href="filtrar?modelo=enduro calle&rubro=accesorios">Enduro calle</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Repuestos</b></li>
                                        <li><a href="filtrar?modelo=baterias&rubro=accesorios">Baterias</a></li>
                                        <li><a href="filtrar?modelo=escapes&rubro=accesorios">Escapes</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Seguridad</b></li>
                                        <li><a href="filtrar?modelo=alarmas&rubro=accesorios">Alarmas</a></li>
                                        <li><a href="filtrar?modelo=candados&rubro=accesorios">Candados</a></li>
                                        <li><a href="filtrar?modelo=lingas&rubro=accesorios">Lingas</a></li>
                                        <li><a href="filtrar?modelo=trabadiscos&rubro=accesorios">Trabadiscos</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Protecciones</b></li>
                                        <li><a href="filtrar?modelo=coderas&rubro=accesorios">Coderas</a></li>
                                        <li><a href="filtrar?modelo=integrales&rubro=accesorios">Integrales</a></li>
                                        <li><a href="filtrar?modelo=pecheras&rubro=accesorios">Pecheras</a></li>
                                        <li><a href="filtrar?modelo=rodilleras&rubro=accesorios">Rodilleras</a></li>
                                    </div>
                                </div>


                                <div class="row white">
                                    <div class="hidden-xs hidden-sm col-md-12 text-right" style="padding: 0px;">
                                        <img src="<?php echo base_url(); ?>assets/img/categorias/cat_baul.png" alt="casco" width="300" height="300">
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/lavalle">Conocenos</a>
                        </li>
                    </ul>

            </div>
        </div>
    </nav>
