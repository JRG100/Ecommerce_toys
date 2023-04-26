<?php if (isset($gestion)): ?>
	<legend class="bg-primary text-center text-white fs-2 mt-5">GESTIONAR PEDIDOS</legend>
<?php else: ?>
	<h1>Mis pedidos</h1>
<?php endif; ?>

<table class="table container">
    
    <tr>      
      <th scope="col">Nº PEDIDO</th>
      <th scope="col">COSTE</th>      
      <th scope="col">FECHA</th>          
        
    </tr>   
    <?php 
		while($ped = $pedidos->fetch_object()): 		
	?>
        <tr>    
        <td> 
            <a href="<?= base_url ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
        </td>
        <td>
            <?= $ped->coste ?> €
        </td>
        <td>
            <?= $ped->fecha ?>
        </td>
        <td>
           <?=Utils::showStatus($ped->estado)?>
        </td>
       
    </tr>  
    <?php endwhile; ?>    
   
</table>