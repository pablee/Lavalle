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

<!-- Modal -->
<div class="modal fade" id="venta_corporativa" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Escribinos tu consulta y te responderemos a la brevedad!</h4>
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

                    <input type="hidden" class="form-control" name="para" value="contacto@lavallemotos.com.ar"></input>
                    <div class="form-group">
                        <label> Consulta</label>
                        <textarea type="text" class="form-control" name="consulta"> </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-default btn-block">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>