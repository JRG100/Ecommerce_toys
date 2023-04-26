<?php if(isset($categoria)): ?>
<h1 class="text-center mt-5 bg-primary text-white text-uppercase "><?=$categoria->nombre?></h1>
<?php if($productos->num_rows == 0): ?>
    <p>No hay productos para mostrar</p>
    <?php else: ?>
        <div class="row">
    <?php while($product = $productos->fetch_object()): ?>
        <div class="col-md-4 mb-4">
                <div class="card">
                
                <?php if($product->imagen != null): ?>
                <img class="card-img-top" width="300" height="300" src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="imagen producto">
                <?php else: ?> 
                    <img class="card-img-top" width="300" height="300" src="<?=base_url?>img/producto2.jpg" alt="imagen producto">
                <?php endif; ?>

                    <div class="card-body text-center bg-primary text-white p-5">
                    <h3><?=$product->nombre?></h3>
                <p><?=$product->descripcion?></p>
                <p class="fs-1 fw-bold"><?=$product->precio?>€</p>
                        <a class="btn btn-success fs-3 fw-bold text-uppercase py-3 w-100" href="<?=base_url?>carrito/add&id=<?=$product->id?>">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
    </div>
    <?php endif;  ?>
<?php else: ?>
    <h1>La categoría no existe</h1>
<?php endif; ?>