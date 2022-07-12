<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ON SERVICE - SYSTEM</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/desktop.css" media="screen and (min-width:990px)">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header__content">
                
                <figure class="logo">
                    <a href="#"><img src="./css/img/logonav.png" class="logo__img" alt="logo"></a>
                </figure>

                <nav class="nav">
                    <ul class="header__menu">
                        <li class="menu__item"><a href="" class="menu__item--link">Inicio</a></li>
                        <li class="menu__item"><a href="" class="menu__item--link">Linea Marron</a></li>
                        <li class="menu__item"><a href="" class="menu__item--link">Linea Blanca</a></li>
                        <li class="menu__item"><a href="" class="menu__item--link">Mobile</a></li>
                        <li class="menu__item"><a href="" class="menu__item--link">IT</a></li>
                        <li class="menu__item"><a href="" class="menu__item--link">Legend</a></li>
                    </ul>
                </nav>

                
                    <a onclick="showMenu()"  href="#" class="burgerList__img">
                        <img src="./css/img/icon-hamburger.svg"  alt="mostrar menu para moviles">
                        <!-- <img src="" class="cancel__img" alt="cancel"> -->
                    </a>
                

                
                    <a onclick="showMenu()" href="#" class="cancel__img">
                        <img src="./css/img/cruz.png"  alt="cerrar menu para moviles">
                    </a>
                

            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="main__content">
                <table class="table">

                    <thead>
                        <tr>
                            <th>Asignado</th>
                            <th>Presup. Aprobado</th>
                            <th>Devolución</th>
                            <th>Reparado</th>
                            <th>Reincidencia</th>
                        </tr>
                    </thead>

                    <tbody>
                          <tr>
                                <td data-label="Asignado">Andres Molero</td>
                                <td data-label="Presup. Aprobado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sapiente!</td>
                                <td data-label="Devolución">Lorem ipsum dolor sit amet.</td>
                                <td data-label="Reparado">Lorem, ipsum.</td>
                                <td data-label="Reincidencia">Lorem ipsum, dolor sit amet consectetur adipisicing.</td>
                          </tr>
               
                          <tr>
                                <td data-label="Asignado">Andres Molero</td>
                                <td data-label="Presup. Aprobado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sapiente!</td>
                                <td data-label="Devolución">Lorem ipsum dolor sit amet.</td>
                                <td data-label="Reparado">Lorem, ipsum.</td>
                                <td data-label="Reincidencia">Lorem ipsum, dolor sit amet consectetur adipisicing.</td>
                          </tr>
               
                          <tr>
                                <td data-label="Asignado">Andres Molero</td>
                                <td data-label="Presup. Aprobado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sapiente!</td>
                                <td data-label="Devolución">Lorem ipsum dolor sit amet.</td>
                                <td data-label="Reparado">Lorem, ipsum.</td>
                                <td data-label="Reincidencia">Lorem ipsum, dolor sit amet consectetur adipisicing.</td>
                          </tr>
               
                          <tr>
                                <td data-label="Asignado">Andres Molero</td>
                                <td data-label="Presup. Aprobado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sapiente!</td>
                                <td data-label="Devolución">Lorem ipsum dolor sit amet.</td>
                                <td data-label="Reparado">Lorem, ipsum.</td>
                                <td data-label="Reincidencia">Lorem ipsum, dolor sit amet consectetur adipisicing.</td>
                          </tr>
               
                          <tr>
                                <td data-label="Asignado">Andres Molero</td>
                                <td data-label="Presup. Aprobado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sapiente!</td>
                                <td data-label="Devolución">Lorem ipsum dolor sit amet.</td>
                                <td data-label="Reparado">Lorem, ipsum.</td>
                                <td data-label="Reincidencia">Lorem ipsum, dolor sit amet consectetur adipisicing.</td>
                          </tr>
                 
                    </tbody>

                  </table>
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