<form action="<?=base_url?>categoria/save" method="POST">
			<div class="row justify-content-center">
            <div class="col-md-8 needs-validation" novalidate>
                <fieldset>
                    <legend class="bg-primary text-center text-white fs-2 mt-5">CREAR NUEVA CATEGORÍA</legend>

                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required/>                        
                    </div>                   
                   
                    <input type="submit" value="GUARDAR" />
                </fieldset>
            </div>
        </div>
			</form>