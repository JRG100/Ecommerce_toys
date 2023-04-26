<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="py-5 ">
        <h1 class="text-center">
            Estela 
            <span class="text-primary">TOYS</span>
        </h1>
    </header>

    <div class="border-top py-4">
        <div class="navbar navbar-expand-lg container navbar-light ">
            <a class="navbar-brand nombre-sitio d-lg-none fs-2 fw-bold text-uppercase" href="index.html">
                Tienda Muebles
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
       
            <div id="navegacion" class="collapse navbar-collapse">
                <nav class="navbar-nav container d-flex flex-md-row justify-content-md-end text-center navegacion">
                    <a class="text-decoration-none navegacion__enlace" href="index.php">Inicio</a>
                    <a class="text-decoration-none navegacion__enlace" href="nosotros.html">Nosotros</a>
                    <a class="text-decoration-none navegacion__enlace" href="tienda.html">Tienda</a>
                    <a class="text-decoration-none navegacion__enlace" href="blog.html">Blog</a>
                    <a class="text-decoration-none navegacion__enlace" href="galeria.html">Galería</a>
                    <a class="text-decoration-none navegacion__enlace" href="contacto.html">Contacto</a>
                </nav>
            </div>
        </div>
    </div>


    <main class="container-xl py-5">
        <h2 class="text-center my-5">Sobre Nosotros</h2>

        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="img/nosotros.jpg" alt="imagen sobre nosotros">
            </div>
            <div class="col-md-6">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam exercitationem autem minus aliquam cumque ducimus dolores, laboriosam soluta eaque itaque modi corrupti ut. Aliquam a dignissimos consequuntur, debitis mollitia dicta.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dignissimos non voluptatum corrupti, quas facere voluptas voluptate vel similique, fugit harum ratione exercitationem! Atque quod, repellendus adipisci tempora ipsa qui?</p>
            </div>
        </div>
    </main>

    <footer class="pt-5 mt-5 border-top">
        <div class="container-xl mt-5">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <h3 class="mb-4">Categorías</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-dark text-decoration-none" href="#">Mini-Mons</a>
                        <a class="text-dark text-decoration-none" href="#">Figuras</a>
                        <a class="text-dark text-decoration-none" href="#">Accesorios</a>   
                    </nav>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <h3 class="mb-4">Sobre Nosotros</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-dark text-decoration-none" href="#">Nuestra Historia</a>
                        <a class="text-dark text-decoration-none" href="#">Misión, Visión y Valores</a>
                        <a class="text-dark text-decoration-none" href="#">Carreras</a>
                        <a class="text-dark text-decoration-none" href="#">Política de Privacidad</a>
                        <a class="text-dark text-decoration-none" href="#">Términos del Servicio</a>
                    </nav>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <h3 class="mb-4">Soporte</h3>
                    <nav class="d-flex flex-column">
                        <a class="text-dark text-decoration-none" href="#">Preguntas Frecuentes</a>
                        <a class="text-dark text-decoration-none" href="#">Ayuda en Línea</a>
                        <a class="text-dark text-decoration-none" href="#">Confianza y Seguridad</a>
                    </nav>
                </div>
            </div>

            <p class="mt-5 text-center fs-2">Todos los derechos Reservados. TiendaMuebles</p>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>