<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganador</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <h1>¡Has perdido!</h1>
    <h2>
        <?php
        echo "La palabra era: <span>" . $_SESSION['palabra'] . "</span>";
        ?>
    </h2>
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/aec25a114158109.6035ff0b2f7ce.png" alt="imagen_perdedor">
    <br>
    <a href="index.php">Jugar de nuevo</a>
</body>
</html>