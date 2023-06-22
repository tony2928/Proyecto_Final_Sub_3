<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="preload" href="img/logo.png" as="image">
    <link rel="shortcut icon" href="img/logo.png" type="image/jpg">
    <title>Agenda</title>
</head>

<body>

    <header id="headerContacts">

        <a id="home" href="index.php">
            <img id="logo" src="img/logo.png" alt="">
            <h1>Contactos</h1>
        </a>

        <form method="GET" action="search.php" id="searchBar">
            <button type="submit"></button>
            <input type="search" name="search" id="search" placeholder="Buscar..." onkeypress="search(value)">
        </form>

    </header>

    <div class="main">

        <!-- Mostrar contactos -->

        <table id="datosContactos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Telefono</th>
                    <th>Correo 1</th>
                    <th>Correo 2</th>
                    <th>Red Social</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>


<?php

include("db.php");

$query = "SELECT * FROM datos_personales";
$data = mysqli_query($connect, $query);

if (!$data) {
    mysqli_close($connect);
    die("Query Failed");
}

while ($row = mysqli_fetch_array($data)) {

echo "<tr>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['id_persona'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['nombre'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['a_paterno'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['a_materno'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['telefono'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['correo_1'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['correo_2'] . "</span></td>";
echo "<td class='datoPersona' onclick='copyText(event)'><span class='dataText'>" . $row['red_social'] . "</span></td>";
echo "<td><a href='edit.php?id=" . $row['id_persona'] . "'>Editar</a> <a href='confirm.php?id=" . $row['id_persona'] . "'  >Eliminar</a></td>";
echo "</tr>";

}

mysqli_close($connect);

?>


            </tbody>
        </table>

    </div>


    <a href="add.html" class="buttonNew">
        <svg xmlns="http://www.w3.org/2000/svg" id="plus" class="icon icon-tabler icon-tabler-plus" width="44"
            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>
    </a>

    <div id="copiedContainer">
        <p id="copied">Copiado</p>
    </div>

    <iframe id="iframeNew" src="add.html" frameborder="0"></iframe>

    <script src="js/scriptContactos.js"></script>

</body>

</html>