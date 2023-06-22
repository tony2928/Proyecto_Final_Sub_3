<!DOCTYPE html>
<html lang="es">

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
                </tr>
            </thead>
            <tbody>

                
<?php

include("db.php");

if (isset($_GET["search"])) {

    
    $search = $_GET["search"];
    
    if ($search == "") {
        echo "<div id='center'><span>No se encontró nada</span></div>";
        mysqli_close($connect);
        die();
    }

    $query = "SELECT * FROM datos_personales WHERE id_persona LIKE '%$search%' OR nombre LIKE '%$search%' OR a_paterno LIKE '%$search%' OR a_materno LIKE '%$search%' OR telefono LIKE '%$search%' OR correo_1 LIKE '%$search%' OR correo_2 LIKE '%$search%' OR red_social LIKE '%$search%'";
    $data = mysqli_query($connect, $query);
    

    if (!$data) {
        echo "<div id='center'><span>Algo salió mal</span></div>";
        mysqli_close($connect);
        die();
    }

    // mostrar en json

    // $json = array();

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
        echo "</tr>";
        
        }

    // $jsonstring = json_encode($json);
    // echo $jsonstring;

} else {
    echo "<div id='center'><span>Algo salió mal</span></div>";
}

mysqli_close($connect);

?>

            </tbody>
        </table>

    </div>

<script src="js/scriptContactos.js"></script>

</body>
</html>