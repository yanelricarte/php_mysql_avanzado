<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Document</title>
</head>

<body>
    <div id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li> <a href="index.php?ruta=registro"> Registro</a></li>
                    <li> <a href="index.php?ruta=ingreso"> Ingreso</a></li>
                    <li> <a href="index.php?ruta=inicio"> Inicio</a></li>
                    <li> <a href="index.php?ruta=salir"> Salir</a></li>

                </ul>
            </nav>
            <div id="marca">
                <h1> Login</h1>
            </div>
        </header>
        <section id="contenido">
            <?php
            if (isset($_GET['ruta'])) {
                if (
                    $_GET['ruta'] == 'registro' ||
                    $_GET['ruta'] == 'ingreso' ||
                    $_GET['ruta'] == 'inicio' ||
                    $_GET['ruta'] == 'salir'
                ) {
                    include "paginas/" . $_GET['ruta'] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            } else {
                include "paginas/registro.php";
            }
            ?>

        </section>
    </div>
</body>

</html>