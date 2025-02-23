<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar Citas</title>
    <link rel="stylesheet" href="../../assets/css/decoration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca9fa9751b.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    include("../../controller/session_l.php");
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark px-2 d-flex justify-content-between pum">
        <a class="linkHistorial" href="inicio.php">Regresar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav pum">
                <li class="nav-item active">
                    <a class="linkCitasPend" href="user_citashistorial0.php">Citas No Realizadas</a>
                </li>

                <li class="nav-item active">
                    <a class="linkCitasPend" href="user_conlook.php">Buscar Cita</a>
                </li>
        </div>

        <a class="linkEdit" href="../login/login.php">Salir</a>

    </nav>


    <div class="container">
        <h1>Citas Realizadas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="columnas columTitulo">Paciente</th>
                    <th scope="col" class="columnas columTitulo">DNI</th>
                    <th scope="col" class="columnas columTitulo">Doctor</th>
                    <th scope="col" class="columnas columTitulo">Fecha</th>
                    <th scope="col" class="columnas columTitulo">Motivo</th>
                    <th scope="col" class="columnas columTitulo">Estado</th>
                    <th scope="col" class="columnas columTitulo">Realizada</th>
                </tr>
            </thead>

            <tbody>
                <?php require("../../model/userCitasHistorialTabla.php"); ?>
            </tbody>
        </table>
    </div>

</body>

</html>