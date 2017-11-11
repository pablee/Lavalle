<!--Mapa-->
<div class="container  margin-hottom">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-4 buscar-local" style="margin-bottom: 30px;">
            <h4>Busc&aacute; la sucursal m&aacute;s cercana!!!</h4>
            <div class="form-group" style="margin-bottom: 30px;">
                <div class="input-group">
                    <input id="address" class="form-control input-lg" type="textbox" placeholder="Localidad">
                    <div class="input-group-btn">
                        <button id="submit" type="button" class="btn btn-default input-lg" value="Buscar">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <img src="<?php echo base_url(); ?>assets/img/iconos/logo_md.png" alt="logo_md">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div id="map">
            </div>
        </div>
    </div>
</div>