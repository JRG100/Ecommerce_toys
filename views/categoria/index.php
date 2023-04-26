<legend class="bg-primary text-center text-white fs-2 mt-5">GESTIONAR CATEGORÍAS</legend>

<div class="d-grid gap-2 d-md-flex">
<a href="<?=base_url?>categoria/crear" role="button" class="btn btn-primary py-3 d-grid gap-2 col-2 mx-auto">
CREAR CATEGORIA
</a>
</div>
<table class="table container">
    
    <tr>      
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>      
    </tr>
    
<?php while($cat = $categorias->fetch_object()): ?>   
    
    <tr>    
        <td><?=$cat->id;?></td>
        <td><?=$cat->nombre;?></td>      
    </tr>  

<?php endwhile; ?>

</table>