<?php if(isset($_SESSION['identity'])): ?>

    <legend class="bg-primary text-center text-white fs-2 mt-5">REALIZAR PEDIDO</legend>

<a class="btn btn-primary py-4 mt-3" href="<?=base_url?>carrito/index">Comprobar pedido</a>
<form action="<?=base_url.'pedido/add'?>" method="POST">
			<div class="row justify-content-center">
            <div class="col-md-8 needs-validation" novalidate>
                <fieldset>
                    <legend class="bg-primary text-center text-white fs-2 mt-5">DATOS DE ENVÍO</legend>

                    <div class="mb-3">
                        <label class="form-label" for="provincia">Provincia</label>
                        <input type="text" name="provincia" class="form-control"  required>                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="localidad">Localidad</label>
                        <input type="text" name="localidad" class="form-control"  required>                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="direccion">Dirección</label>
                        <input type="text" name="direccion" class="form-control"  required>                        
                    </div>
                   
                    <input type="submit" value="CONFIRMAR PEDIDO" />
                </fieldset>
            </div>
        </div>
			</form>


<?php else : ?>
    <h1 class="text-center">Necesitas estar identificado</h1>
    <p class="text-center">Necesitas estar logueado en la web para hacer tu pedido</p>
    <?php endif; ?>