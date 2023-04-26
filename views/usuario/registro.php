<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<p class="alert alert-primary text-center">Registro completado correctamente</p>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<p class="alert alert-danger">Registro fallido, introduce bien los datos</p>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>


 <form action="<?=base_url?>usuario/save" method="POST" class="container-xl py-5">        
        <div class="row justify-content-center">
            <div class="col-md-8 needs-validation" novalidate>
                <fieldset>
                    <legend class="bg-primary text-center text-white fs-2">REGISTRO USUARIO</legend>

                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control"  required>
                        <span class="invalid-feedback">Hubo un error...</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control"  required>
                        <span class="valid-feedback">Muy bien!!</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" name="password"  class="form-control"  required>
                    </div>

                    <input type="submit" value="Registrarse" />
                </fieldset>
            </div>
        </div>
</form>
