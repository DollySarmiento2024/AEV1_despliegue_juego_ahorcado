<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganador</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <h1>¡Enhorabuena, has ganado la partida!</h1>
    <h2>
        <?php
        echo "La palabra era: <span>" . $_SESSION['palabra'] . "</span>";
        ?>
    </h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv5WoBSI4tt81sG8cC_LBER7d8sARRW30E-Eo6Kz60FmM6GinSY4l8NYC_NYUFwmdz2IE&usqp=CAU" alt="imagen_ganador">
    <br>
    <a href="index.php">Jugar de nuevo</a>
</body>
</html>