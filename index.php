<?php
session_start();

// Lista de palabras para el juego
$palabras = [
    'elefante', 
    'jirafa', 
    'hipopotamo', 
    'rinoceronte', 
    'cocodrilo', 
    'camello', 
    'chimpance', 
    'leopardo', 
    'tigre', 
    'cebra', 
    'leon', 
    'panda', 
    'lobo', 
    'flamenco', 
    'pingüino', 
    'koala', 
    'bisonte',
    'caballo'
];

// Inicializar el juego
if (!isset($_SESSION['palabra'])) {
    $_SESSION['palabra'] = $palabras[array_rand($palabras)];
    $_SESSION['vidas'] = 6; // Número máximo de vidas
    $_SESSION['letras_acertadas'] = str_repeat('?', strlen($_SESSION['palabra']));
    $_SESSION['letras_usadas'] = [];
}

// Procesar la letra enviada
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['letra'])) {
    $letra = strtolower($_POST['letra']);

    // Verificar si la letra ya se ha usado
    if (in_array($letra, $_SESSION['letras_usadas'])) {
        echo "Ya has usado la letra <span>'$letra'</span>. Intenta con otra.<br>";
    } else {
        // Añadir la letra a las usadas
        $_SESSION['letras_usadas'][] = $letra;

        // Verificar si la letra está en la palabra secreta
        if (strpos($_SESSION['palabra'], $letra) !== false) {
            for ($i = 0; $i < strlen($_SESSION['palabra']); $i++) {
                if ($_SESSION['palabra'][$i] == $letra) {
                    $_SESSION['letras_acertadas'][$i] = $letra;
                }
            }
        } else {
            $_SESSION['vidas']--;
        }
    }
}

// Comprobar si se ha ganado o perdido
if ($_SESSION['letras_acertadas'] == $_SESSION['palabra']) {
    include_once("ganador.php");
    session_destroy();
    exit();
} elseif ($_SESSION['vidas'] <= 0) {
    include_once("perdedor.php");
    session_destroy();
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ahorcado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Juego del Ahorcado</h1>
    <p>Palabra secreta: <?php echo "<span>" . $_SESSION['letras_acertadas']."</span>"; ?></p>
    <p>Vidas restantes: <?php echo "<span>" . $_SESSION['vidas']."</span>"; ?></p>
    <form method="post">
        <label for="letra">Introduce una letra:</label>
        <input type="text" name="letra" id="letra" maxlength="1" required>
        <button type="submit">Adivinar</button>
    </form>
    <p>Letras usadas: <?php echo "<span>" . implode(', ', $_SESSION['letras_usadas'])."</span>"; ?></p>
</body>
</html>
