<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/desktop.css" media="screen and (min-width:990px)">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>ON SERVICE - SYSTEM</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__content">
                <figure class="logo">
                    <a href="#"><img src="./css/img/logonav.png" class="logo__img" alt="logo"></a>
                </figure>

                <nav class="nav">
                    <form action="" method="post">
                        <ul class="header__menu">
                            <li class="menu__item"><a href="index.php" class="menu__item--link">Inicio</a></li>
                           
                        </ul>
                    </form>
                </nav>

                <a onclick="showMenu()" href="#" class="burgerList__img">
                    <img src="./css/img/icon-hamburger.svg" alt="mostrar menu para moviles">
                </a>

                <a onclick="showMenu()" href="#" class="cancel__img">
                    <i class="icon bi bi-x-lg"></i>
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="main__content">

                <h2>Configurador</h2>
                <form method="POST">
                    <div class="">
                        <label for="fecha">Fecha De Busqueda TODOS</label>
                        <input type="text" name="Fecha" placeholder="Fecha de Inicio  YYYY/MM/DD">
                    </div>
                    <div class="">
                        <label for="Region">Region Predeterminada</label>
                        <select name="Region" id="region" >
                            <option value="MARACAIBO">Maracaibo</option>
                            <option value="CARACAS">Caracas</option>
                        </select>
                        
                    </div>
                    <div class="">
                        <label for="Linea">Linea Predeterminada</label>
                        <select name="Linea" id="Linea">
                            <option value="BLANCA">Linea Blanca</option>
                            <option value="MARRON">Linea Marron</option>
                        </select>
                    </div>
                    <input type="submit" name="Guardar" value="Guardar">
                </form>
                <?php
                    include("php/configurador.php")
                ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer__content">
                <div class="footer__copyright">
                    <p class="">&copy; Copyright 2021. Todos los derechos reservados.</p>
                    <p class="">Diseñado por <span> ON SERVICE C.A</span></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="./js/index.js"></script>
</body>

</html>