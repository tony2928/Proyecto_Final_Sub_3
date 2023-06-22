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

    <?php

include('db.php');

$id = $_GET['id'];

mysqli_close($connect);

echo "<script>";
echo "let conf = confirm('Estás seguro de eliminar este contacto?');";
echo "if (conf == true) {";
echo "location.href='delete.php?id=" . $id . "'} else { location.href='index.php'};";
echo "</script>";

    ?>

    

</body>

</html>