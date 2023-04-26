
		
	<?php if(!isset($_SESSION['identity'])): ?>			
			<form action="<?=base_url?>usuario/login" method="POST">
			<div class="row justify-content-md-center">
            <div class="col-md-6 needs-validation" novalidate>
                <fieldset>
                    <legend class="bg-primary text-center text-white fs-2 mt-5">INICIAR SESIÓN</legend>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control"  required>                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control"  required>                        
                    </div>
                   
					<div class="d-flex gap-2">
                    <input class="btn btn-primary" type="submit" value="INICIAR SESIÓN" />
					<a class="btn btn-primary" href="<?=base_url?>usuario/registro">REGISTRARSE</a>
					</div>
                </fieldset>
            </div>
        </div>
			</form>
		<?php else: ?>
			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>



	