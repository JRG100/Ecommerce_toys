<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Inicio</title>
    <link rel="preconnect" href="<?=base_url?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?=base_url?>https://fonts.gstatic.com" crossorigin>
    <link href="<?=base_url?>https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>css/app.css">
    <link rel="preload" href="<?=base_url?>css/style.css" as="style">
    <link rel="stylesheet" href="<?=base_url?>css/style.css">
</head>
<body>
    <header class="py-5 ">
        <h1 class="text-center">
            Tienda 
            <span class="text-primary">TOYS</span>
        </h1>
        
    <div class="container">
	<nav class="navbar-nav container d-flex flex-md-row justify-content-md-end text-center navegacion">
    <a class="text-decoration-none navegacion__enlace" href="<?=base_url?>">Inicio</a>
    <!--<a class="text-decoration-none navegacion__enlace" href="<?=base_url?>usuario/log"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></a>-->

    
	<?php $stats = Utils::statsCarrito(); ?>
			<a class="text-decoration-none text-primary" href="<?=base_url?>carrito/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
			<!--<a href="<?=base_url?>carrito/index" class="text-decoration-none navegacion__enlace">Productos (<?=$stats['count']?>)</a>
			<a href="<?=base_url?>carrito/index" class="text-decoration-none navegacion__enlace">Total: <?=$stats['total']?>€</a>-->
	
	</nav>
		<nav class="navbar-nav container d-flex flex-md-row justify-content-md-start text-center navegacion">
			<?php if(isset($_SESSION['admin'])): ?>
				<li><a class="text-decoration-none text-primary navegacion__enlace navegacion" href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
				<li><a class="text-decoration-none text-primary navegacion__enlace navegacion" href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
				<li><a class="text-decoration-none text-primary navegacion__enlace navegacion" href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			<?php endif; ?>
			
			<?php if(isset($_SESSION['identity'])): ?>
				<li><a class="text-decoration-none text-primary navegacion__enlace navegacion" href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
				<li><a class="text-decoration-none text-primary navegacion__enlace navegacion" href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
			<?php else: ?> 
				
			<?php endif; ?> 
	</nav>
	
	
</div>		
    </header>
   <!-- <div class="hero"></div> -->

    
   