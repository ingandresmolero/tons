<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="60" > -->
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
                            <li class="menu__item"><a href="portal.php" class="menu__item--link">Lineas</a></li>
                            
                            <li class="menu__item"><a href="views/daka.php" class="menu__item--link">DAKA</a></li>
                            <li class="menu__item"><a href="views/multimaxmcbo.php" class="menu__item--link">Multimax Mcbo</a></li>
                            <li class="menu__item"><a href="views/multimaxlimpia.php" class="menu__item--link">Multimax Limpia</a></li>
                            <!-- <li class="menu__item"><a href="" class="menu__item--link"><input type="submit" class="menu__item--link button__submit" name="filtrado" value="B.Filtrada"></a></li>
                            <li class="menu__item"><a href="configuracion.php" class="menu__item--link">Config</a></li> -->
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
                    <form action="busqueda.php" method="post" class="search search--flex">
                        <input type="text" class="input--text header__input--text font" name="ODS" placeholder="Buscar ODS">
                        <input type="submit" name="enviar" class="button header__input--button font" value="Buscar 🔎">
                    </form>
                </div>


            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="main__content">

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
                    include("./php/Querys/SelectDatos.php");
                  
                    ?>
                </table>


            </div>
        </div>
    </main>

    <?php
    include("./templates/footer.php")
    ?>

    <script src="./js/index.js"></script>
</body>

</html>