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
                        <!--Motos-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motos</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white padding">
                                    <div class="col-xs-1 col-sm-1 col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-5 col-sm-2 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php //foreach($motos_tipos AS $moto_tipo): ?>
                                            <!--li><a href="filtrar?tipo=<?php //echo $moto_tipo["nombre"]; ?>&rubro=motos"><?php //echo ucwords($moto_tipo["nombre"]); ?></a></li-->
                                        <?php //endforeach; ?>
                                        <li><a href="filtrar?tipo=cuatriciclos&rubro=motos">Cuatriciclos</a></li>
                                        <li><a href="filtrar?tipo=cubs&rubro=motos">Cubs</a></li>
                                        <li><a href="filtrar?tipo=custom&rubro=motos">Custom</a></li>
                                        <li><a href="filtrar?tipo=enduro&rubro=motos">Enduro</a></li>
                                        <li><a href="filtrar?tipo=enduro-calle&rubro=motos">Enduro - Calle</a></li>
                                        <li><a href="filtrar?tipo=scooters&rubro=motos">Scooters</a></li>
                                        <li><a href="filtrar?tipo=streets&rubro=motos">Streets</a></li>
                                        <li><a href="filtrar?tipo=utilitarios&rubro=motos">Utilitarios</a></li>
                                        <li style="margin-top: 5px;"><a href="categoria?rubro=motos">Ver todo</a></li>
                                    </div>
                                    <div class="col-xs-5 col-sm-2 col-md-2 margin-top">
                                        <li><b>Alta gama</b></li>
                                        <?php //foreach($motos_marcas AS $moto_marca): ?>
                                            <!--li><a href="filtrar?marca=<?php //echo $moto_marca["nombre"]; ?>&rubro=motos"><?php //echo ucwords($moto_marca["nombre"]); ?></a></li-->
                                        <?php //endforeach; ?>
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
                        <!--Cascos-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cascos</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white padding">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php //foreach($cascos_tipos AS $casco_tipo): ?>
                                            <!--li><a href="filtrar?tipo=<?php //echo $casco_tipo["nombre"]; ?>&rubro=cascos"><?php //echo ucwords($casco_tipo["nombre"]); ?></a></li-->
                                        <?php //endforeach; ?>
                                        <li><a href="filtrar?tipo=abierto&rubro=cascos">Abiertos</a></li>
                                        <li><a href="filtrar?tipo=motocross&rubro=cascos">Motocross</a></li>
                                        <li><a href="filtrar?tipo=integral&rubro=cascos">Integrales</a></li>
                                        <li><a href="filtrar?tipo=rebatible&rubro=cascos">Rebatibles</a></li>
                                        <li><a href="filtrar?tipo=modular&rubro=cascos">Modulares</a></li>
                                        <li style="margin-top: 5px;"><a href="categoria?rubro=cascos">Ver todo</a></li>
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
                        <!--Indumentaria-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Indumentaria</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white padding">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php //foreach($indumentaria_tipos AS $indumentaria_tipo): ?>
                                            <!--li><a href="filtrar?tipo=<?php //echo $indumentaria_tipo["nombre"]; ?>&rubro=indumentaria"><?php //echo ucwords($indumentaria_tipo["nombre"]); ?></a></li-->
                                        <?php //endforeach; ?>
                                        <li><a href="filtrar?tipo=pista&rubro=indumentaria">Pista</a></li>
                                        <li><a href="filtrar?tipo=touring&rubro=indumentaria">Touring</a></li>
                                        <li><a href="filtrar?tipo=enduro-cross&rubro=indumentaria">Enduro-cross</a></li>
                                        <li style="margin-top: 5px;"><a href="categoria?rubro=indumentaria">Ver todo</a></li>
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
                        <!--Calzado-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calzado</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white padding">
                                    <div class="hidden-xs hidden-sm col-md-1 margin-top">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Tipo</b></li>
                                        <?php //foreach($calzado_tipos AS $calzado_tipo): ?>
                                            <!--li><a href="filtrar?tipo=<?php //echo $calzado_tipo["nombre"]; ?>&rubro=calzado"><?php //echo ucwords($calzado_tipo["nombre"]); ?></a></li-->
                                        <?php //endforeach; ?>
                                        <li><a href="filtrar?tipo=pista&rubro=calzado">Pista</a></li>
                                        <li><a href="filtrar?tipo=motocross&rubro=calzado">Motocross</a></li>
                                        <li><a href="filtrar?tipo=touring&rubro=calzado">Touring</a></li>
                                        <li><a href="filtrar?tipo=enduro-cross&rubro=calzado">Enduro-cross</a></li>
                                        <li style="margin-top: 5px;"><a href="categoria?rubro=calzado">Ver todo</a></li>
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
                        <!--Accesorios-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesorios</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row white padding">
                                    <div class="col-md-1"></div>

                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Accesorios</b></li>
                                        <li><a href="filtrar?tipo=antiparras&rubro=accesorios">Antiparras</a></li>
                                        <li><a href="filtrar?tipo=bauleras&rubro=accesorios">Bauleras</a></li>
                                        <li><a href="filtrar?tipo=intercomunicadores&rubro=accesorios">Intercomunicadores</a></li>
                                        <li style="margin-top: 5px;"><a href="categoria?rubro=accesorios">Ver todo</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Cubiertas</b></li>
                                        <li><a href="filtrar?tipo=motocross&rubro=accesorios">Motocross</a></li>
                                        <li><a href="filtrar?tipo=cuatri&rubro=accesorios">Cuatri</a></li>
                                        <li><a href="filtrar?tipo=enduro calle&rubro=accesorios">Enduro calle</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Repuestos</b></li>
                                        <li><a href="filtrar?tipo=baterias&rubro=accesorios">Baterias</a></li>
                                        <li><a href="filtrar?tipo=escapes&rubro=accesorios">Escapes</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Seguridad</b></li>
                                        <li><a href="filtrar?tipo=alarmas&rubro=accesorios">Alarmas</a></li>
                                        <li><a href="filtrar?tipo=candados&rubro=accesorios">Candados</a></li>
                                        <li><a href="filtrar?tipo=lingas&rubro=accesorios">Lingas</a></li>
                                        <li><a href="filtrar?tipo=trabadiscos&rubro=accesorios">Trabadiscos</a></li>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-2 margin-top">
                                        <li><b>Protecciones</b></li>
                                        <li><a href="filtrar?tipo=coderas&rubro=accesorios">Coderas</a></li>
                                        <li><a href="filtrar?tipo=integrales&rubro=accesorios">Integrales</a></li>
                                        <li><a href="filtrar?tipo=pecheras&rubro=accesorios">Pecheras</a></li>
                                        <li><a href="filtrar?tipo=rodilleras&rubro=accesorios">Rodilleras</a></li>
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
