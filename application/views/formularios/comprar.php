<style>
    .modal-header, .close
    {
        background-color: #938c8f;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }


    .modal-footer
    {
        /*background-color: #f9f9f9;*/
    }
</style>


<?php foreach($productos AS $producto): ?>
    <!-- Modal -->
    <div class="modal fade" id="comprar_<?php echo $producto["sku"]; ?>" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dejanos tus datos y te responderemos a la brevedad!</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="<?php echo $form_action ?>">
                        <div class="form-group">
                            <label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre</label>
                            <input type="text" class="form-control" name="nombre"  placeholder="Nombre"> </input>
                        </div>

                        <div class="form-group">
                            <label for="mail"><span class="glyphicon glyphicon-envelope"></span> Mail</label>
                            <input type="text" class="form-control" name="mail" placeholder="Mail"> </input>
                        </div>

                        <div class="form-group">
                            <label for="nombre"><span class="glyphicon glyphicon-earphone"></span> Telefono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Telefono"> </input>
                        </div>

                        <input type="hidden" name="para" value="tiendaweb@lavallemotos.com.ar">
                        <input type="hidden" name="producto" value="'.$producto[].'">

                        <label> Producto</label>
                        <ul>
                            <li><?php echo 'SKU:'.$producto["sku"]; ?></li>
                            <li><?php echo 'Titulo:'.$producto["titulo"]; ?></li>
                            <li><?php echo 'Precio:'.$producto["precio"]; ?></li>
                            <li><?php echo 'Rubro:'.$producto["rubro"]; ?></li>
                            <li><?php echo 'Marca:'.$producto["marca"]; ?></li>
                        </ul>
                        <br>
                        <button type="submit" class="btn btn-danger btn-default pull-right btn-block">Enviar</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>
<?php endforeach; ?>