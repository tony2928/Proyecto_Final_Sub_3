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
    <title>Añadir contacto</title>
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


    <div id="center">



<?php

include("db.php");

if (isset($_POST["name"]) && isset($_POST["a_paterno"]) && isset($_POST["a_materno"]) && isset($_POST["telefono"]) && isset($_POST["email"]) && isset($_POST["email2"]) && isset($_POST["social"])) {
    $name = $_POST["name"];
    $a_paterno = $_POST["a_paterno"];
    $a_materno = $_POST["a_materno"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    if ($email2 == "") {
        $email2 = "Sin segundo correo";
    }
    $social = $_POST["social"];
    if ($social == "") {
        $social = "Sin red social";
    }

    $query = "INSERT INTO datos_personales (nombre, a_paterno, a_materno, telefono, correo_1, correo_2, red_social) VALUES ('$name', '$a_paterno', '$a_materno', $telefono, '$email', '$email2', '$social')";
    $result = mysqli_query($connect, $query);

    mysqli_close($connect);

    if (!$result) {
        echo "<span>Algo salió mal</span>";
        mysqli_close($connect);
        die("");
    } else {
        echo "<span>Contacto Agregado</span>";
        header("refresh:2;url=index.php");
    }

} else {
    echo "<span>Algo salió mal</span>";
    header("refresh:2;url=index.php");
}

?>

</div>

   
</body>
</html>
