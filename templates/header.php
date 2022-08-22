<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles/estilos.css">
    <link rel="stylesheet" href="./css/styles/tablet.css" media="screen and (min-width:660px)">
    <link rel="stylesheet" href="./css/styles/desktop.css" media="screen and (min-width:990px)">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>ON SERVICE - SYSTEM</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__content header__content--flex header__content--grid">
                <figure class="logo">
                    <a href="#"><img src="./css/img/logonav.png" class="logo__img" alt="logo"></a>
                </figure>

                <nav class="nav">
                    <form action="" method="post">
                        <ul class="header__menu">
                            <li class="menu__item"><a href="" class="menu__item--link">Inicio</a></li>
                            <li class="menu__item"><a href="" class="menu__item--link">
                                    <input type="submit" name="LMarron" class="menu__item--link button__submit" value="Linea Marron"></a></li>
                            <li class="menu__item"><a href="" class="menu__item--link"><input type="submit" class="menu__item--link button__submit" name="LBlanca" value="Linea Blanca"></a></li>
                            <li class="menu__item"><a href="" class="menu__item--link"><input type="submit" class="menu__item--link button__submit" name="mostrar" value="Todos"></a></li>
                        </ul>
                    </form>
                </nav>

                <a onclick="showMenu()" href="#" class="burgerList__img">
                    <img src="./css/img/icon-hamburger.svg" alt="mostrar menu para moviles">
                </a>

                <a onclick="showMenu()" href="#" class="cancel__img">
                    <i class="icon bi bi-x-lg"></i>
                </a>

                <div class="header__inputs">
                    <form action="" method="post" class="search search--flex">
                        <input type="text" class="input--text header__input--text font" name="ODS" placeholder="Buscar ODS">
                        <input type="submit" name="enviar" class="button header__input--button font" value="Buscar 🔎">
                    </form>
                </div>


            </div>
        </div>
    </header>

    <script src="./js/index.js"></script>
</body>

</html>