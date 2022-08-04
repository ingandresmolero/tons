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
                            <li class="menu__item"><a href="" class="menu__item--link">Inicio</a></li>
                            <li class="menu__item"><a href="" class="menu__item--link">
                            <input type="submit" name="LMarron" class="menu__item--link button__submit" value="Linea Marron"></a></li>
                            <li class="menu__item"><a href="" class="menu__item--link"><input type="submit" class="menu__item--link button__submit" name="LBlanca"value="Linea Blanca"></a></li>
                            <li class="menu__item"><a href="" class="menu__item--link"><input type="submit" class="menu__item--link button__submit" name="mostrar"value="Todos"></a></li>
                        </ul>
                        </form>
                    </nav>
    
                    <a onclick="showMenu()"  href="#" class="burgerList__img">
                        <img src="./css/img/icon-hamburger.svg"  alt="mostrar menu para moviles">
                    </a>
                
                    <a onclick="showMenu()" href="#" class="cancel__img">
                        <i class="icon bi bi-x-lg"></i>
                    </a>
                
                <div class="header__inputs">
                <form action="" method="post">
                    <input type="text" class="input__text header__input--text font" name="ODS" placeholder="Buscar ODS">
                    <input type="submit" name="enviar" class="button header__input--button font" value="Buscar 🔎">
                    </form>
                </div>
                
                
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="main__content">

                <!-- <button href="" id="mostrarRegistro">Filtrar Registro<i class="bi bi-search"></i></button> -->
                <!-- <button id="mostrarRegistro">Crear un nuevo registro</button> -->

                <div class="main__formContainer hide" id="form"> 
                    <div class="formTitle">
                        <h2>Filtrar</h2>
                        <a href="" class="closeWindow"><i class="icon bi bi-x-lg"></i></a>
                    </div>
                    
                    <form action="" method="POST" class="main__form main__form--flex main__form--registro">
                        <label for="descripcion" class="labelDescripcion"><span>Descripción</span></label>
                        <input type="text" name="" id="descripcion" class="" autofocus required value="">

                        <label for="nroOrden" class="labelNroOrden"><span>Nro Orden</span></label>
                        <input type="text" name="" id="nroOrden" class="" autofocus required value="">
                        
                        <label for="tipoEquipo" class="labelTipoEquipo"><span>Tipo de Equipo</span></label>
                        <input type="text" name="" id="tipoEquipo" class="" autofocus required value="">
                        
                        <label for="fechaRecepcion" class="labelFechaRecepcion"><span>Fecha de Recepción</span></label>
                        <input type="text" name="" id="fechaRecepcion" class="" autofocus required value="">
                        
                        <label for="lineaEquipo" class="labelLineaEquipo"><span>Línea de Equipo</span></label>
                        <input type="text" name="" id="lineaEquipo" class="" autofocus required value="">
                        
                        <label for="situacion" class="labelSituacion"><span>Situación</span></label>
                        <input type="text" name="" id="situacion" class="" autofocus required value="">
                        
                        <input class="btn" type="button" value="FILTRAR">
                    </form>
                </div>
                
                <table class="table" id="table">

                    <thead>
                        <tr>
                            <th>ODS</th>
                            <th>TECNICO</th>
                            <th>EQUIPO</th>
                            <th>STATUS</th>
                            <th>FECHA INGRESO</th>
                            <th>LINEA</th>
                            <th>REGION</th>
                        </tr>
                    </thead>

                    <?php
include("php/Querys/SelectDatos.php");
include("php/Querys/BuscarServicio.php");
include("php/Querys/FiltradoServicio.php");
include("php/Querys/SeleccionTecnico.php");
?>
                  </table>

                  <div class="main__pagination">
                    <div class="button input__button font button__pagination">Siguiente<i class="bi bi-arrow-right"></i></div>
                    <div class="button input__button font button__pagination"><i class="bi bi-arrow-left"></i>Anterior</div>
                  </div>
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