
<!--<div class="border-top py-4">    
    <div class="navbar navbar-expand-lg container navbar-light ">
            <a class="navbar-brand nombre-sitio d-lg-none fs-2 fw-bold text-uppercase" href="index.html">
                Tienda Muebles
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
       
            <div id="navegacion" class="collapse navbar-collapse">
                <nav class="navbar-nav container d-flex flex-md-row justify-content-md-end text-center navegacion">
                    <a class="text-decoration-none navegacion__enlace" href="<?=base_url?>">Inicio</a>
                    <a class="text-decoration-none navegacion__enlace" href="nosotros.php">Nosotros</a>
                    <a class="text-decoration-none navegacion__enlace" href="tienda.html">Tienda</a>
                    <a class="text-decoration-none navegacion__enlace" href="blog.html">Blog</a>
                    <a class="text-decoration-none navegacion__enlace" href="galeria.html">Galería</a>
                    <a class="text-decoration-none navegacion__enlace" href="contacto.html">Contacto</a>
                </nav>
            </div>

           
        
    </div>-->

   <!-- <div class="container">
	<nav class="navbar-nav container d-flex flex-md-row justify-content-md-end text-center navegacion">
    <a class="text-decoration-none navegacion__enlace" href="<?=base_url?>">Inicio</a>
    <a class="text-decoration-none navegacion__enlace" href="<?=base_url?>usuario/login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></a>

    
	<?php $stats = Utils::statsCarrito(); ?>
			<a class="text-decoration-none" href="<?=base_url?>carrito/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
			<a href="<?=base_url?>carrito/index" class="text-decoration-none navegacion__enlace">Productos (<?=$stats['count']?>)</a>
			<a href="<?=base_url?>carrito/index" class="text-decoration-none navegacion__enlace">Total: <?=$stats['total']?>€</a>
	
	</nav>
		<nav class="navbar-nav container d-flex flex-md-row justify-content-md-end text-center navegacion">
			<?php if(isset($_SESSION['admin'])): ?>
				<li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
				<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			<?php endif; ?>
			
			<?php if(isset($_SESSION['identity'])): ?>
				<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
			<?php else: ?> 
				
			<?php endif; ?> 
	</nav>
	
	
</div>		-->
  
 

   
     
    <section class="container-xl">        
    
        <?php $categorias = Utils::showCategorias(); ?>
   
        <div class="row mt-5">
        <?php while($cat = $categorias->fetch_object()): ?>
            <div class="col-md-4 categoria">
                <div class="overflow-hidden">
                   <!-- <img class="img-fluid" src="<?=base_url?>img/peluches.jpg" alt="imagen categoria">       -->             
                </div>
               
                <a class="btn btn-primary d-block py-4 mt-3" href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><h4><?=$cat->nombre?></h4></a>
            </div>                                                                                              
            <?php endwhile; ?>

          <!--  <div class="col-md-4 categoria">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="<?=base_url?>img/categoria2.jpg" alt="imagen categoria">
                </div>

                <a class="text-dark fs-2 text-decoration-none text-center d-block py-3" href="#">Figuras</a>
            </div>

            <div class="col-md-4 categoria">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="<?=base_url?>img/categoria3.jpg" alt="imagen categoria">
                </div>

                <a class="text-dark fs-2 text-decoration-none text-center d-block py-3" href="#">Accesorios</a>
            </div>
        </div>
    </section>-->

    
</div>

