<legend class="bg-primary text-center text-white fs-2 mt-5">GESTIONAR PRODUCTOS</legend>

<div class="d-grid gap-2 d-md-flex">
<a href="<?=base_url?>producto/crear" role="button" class="btn btn-primary py-3 d-grid gap-2 col-2 mt-5 mx-auto">
CREAR PRODUCTO
</a>
</div>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<p class="alert alert-primary text-center mt-5">Producto creado correctamente</p>
    <?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'): ?>
	<p class="alert alert-danger">Registro fallido</p>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>
<table class="table container mt-5">
    
    <tr>      
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>      
      <th scope="col">PRECIO</th>    
      <th scope="col">STOCK</th>   
      <th scope="col">ACCIONES</th>   

    </tr>
    
<?php while($pro = $productos->fetch_object()): ?>   
    
    <tr>    
        <td><?=$pro->id;?></td>
        <td><?=$pro->nombre;?></td>
        <td><?=$pro->precio;?></td>   
        <td><?=$pro->stock;?></td>        
        <td>
            <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="btn btn-success">Editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="btn btn-danger">Eliminar</a>
        </td>       
    </tr>  

<?php endwhile; ?>

</table>