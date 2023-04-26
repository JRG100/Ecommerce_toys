<?php if (isset($product)): ?>
	<h1><?= $product->nombre ?></h1>
	
<div class="col-md-4 mb-4">
                <div class="card">
                <?php if($product->imagen != null): ?>
                <img class="img-fluid" width="500" height="500" src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="imagen producto">
                <?php else: ?> 
                    <img class="img-fluid" width="500" height="500" src="<?=base_url?>img/producto2.jpg" alt="imagen producto">
                <?php endif; ?>
		</div>
        <div class="card-body text-center bg-primary text-white p-5">
                    <h3><?=$product->nombre?></h3>
                <p><?=$product->descripcion?></p>
                <p class="fs-1 fw-bold"><?=$product->precio?>€</p>
            <a class="btn btn-success fs-3 fw-bold text-uppercase py-3 w-100" href="<?=base_url?>carrito/add&id=<?=$product->id?>">agregar al carrito</a>
			
		</div>
	</div>
<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>


