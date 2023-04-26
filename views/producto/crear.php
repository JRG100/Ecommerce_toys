<?php if(isset($edit) && ($pro) && is_object($pro)): ?>
    <legend class="bg-primary text-center text-white fs-2 mt-5">GESTIONAR PRODUCTO: <?=$pro->nombre?></legend>
    
    <?php
        $url_action = base_url."producto/save&id=".$pro->id;
        ?>
    <?php else: ?>
        <legend class="bg-primary text-center text-white fs-2 mt-5">CREAR NUEVOS PRODUCTOS</legend>
        <?php
        $url_action = base_url."producto/save";
        ?>
<?php endif; ?>


<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data" class="container-xl py-5">
        

        <div class="row justify-content-center">
            <div class="col-md-8 needs-validation" novalidate>
                <fieldset>
                    

                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" required>                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="descripción">Descripción</label>
                        <textarea name="descripcion" class="form-control" required><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="precio">Precio</label>
                        <input type="text" name="precio" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="stock">Stock</label>
                        <input type="number" name="stock"  class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>" required>
                    </div>                
                    <div>
                    <label class="form-label" for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select class="form-label" name="categoria">
			<?php while ($cat = $categorias->fetch_object()): ?>
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>
        </div>
        <div>
        <label class="form-label" for="imagen">Imagen</label>
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="img-fluid"/> 
		<?php endif; ?>		
        </div>
        <input type="file" name="imagen" />

        <div>
        <input class="mt-5" type="submit" value="GUARDAR" />
        </div>  
                </fieldset>
            </div>
        </div>
</form>
