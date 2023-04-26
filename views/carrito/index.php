

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<table class="table container">
    
    <tr>      
      <th scope="col">IMAGEN</th>
      <th scope="col">NOMBRE</th>      
      <th scope="col">PRECIO</th>  
      <th scope="col">UNIDADES</th>   
      <th scope="col">ELIMINAR</th>   
        

    </tr>   
    <?php 
		foreach($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];
	?>
        <tr>    
        <td> <?php if($producto->imagen != null): ?>
                <img class="img-fluid" width="100" height="100" src="<?=base_url?>uploads/images/<?=$producto->imagen?>" alt="imagen producto">
                <?php else: ?> 
                    <img class="img-fluid" width="100" height="100" src="<?=base_url?>img/producto2.jpg" alt="imagen producto">
                <?php endif; ?>
        </td>
        <td>
        <a href="<?= base_url ?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
        </td>
        <td>
            <?=$producto->precio?>
        </td>
        <td>
        <div class="updown-unidades">
        <?=$elemento['unidades']?>
			
				<a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="btn btn-dark">+</a>
				<a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="btn btn-dark">-</a>
			</div>
        </td>
        <td>
        <a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="btn btn-danger">Eliminar</a>
        </td>
       
    </tr>  
    <?php endforeach; ?>    
   
</table>
</br>              

<?php $stats = Utils::statsCarrito(); ?>
<h3>Precio total: <?=$stats['total']?> €</h3>
<a href="<?=base_url?>pedido/hacer" class="btn btn-primary">Hacer pedido</a>
<a href="<?=base_url?>carrito/delete_all" class="btn btn-danger">Vaciar carrito</a>

<?php else: ?>
    <p class="text-center">Carrito vacio, añade algún producto</p>

<?php endif; ?>
