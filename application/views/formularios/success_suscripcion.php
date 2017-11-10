
<?php if(isset($suscripcion)==true): ?>
    <div class="row">
        <div class="col-md-12">
            <p>La suscripcion se realizo correctamente.</p>
        </div>
    </div>
<?php elseif(isset($suscripcion)==false): ?>
    <div class="row">
        <div class="col-md-12">
            <p>No se pudo procesar la suscripcion.</p>
        </div>
    </div>
<?php endif; ?>
