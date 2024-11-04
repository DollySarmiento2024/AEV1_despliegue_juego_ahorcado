# Juego del Ahorcado

Este es un juego de Ahorcado implementado en PHP, en el cual el jugador intenta adivinar una palabra secreta. El jugador tiene un número limitado de vidas y puede perderlas si se equivoca en las letras.

## Instrucciones

1. **Inicio del Juego**:
   - Al comenzar el juego, se selecciona una palabra aleatoria de una lista de palabras relacionadas con animales.
   - El jugador tiene 6 vidas al inicio.

2. **Objetivo**:
   - Adivinar la palabra secreta antes de quedarse sin vidas.
   - Cada vez que el jugador introduzca una letra, el juego verifica si la letra pertenece a la palabra secreta:
     - Si la letra es correcta, se muestra en la palabra.
     - Si la letra es incorrecta, se pierde una vida.
   - El juego finaliza cuando el jugador adivina la palabra completa o se queda sin vidas.

3. **Fin del juego**:
   - **Victoria**: Si adivinas la palabra completa, el juego muestra una pantalla de victoria.
   - **Derrota**: Si te quedas sin vidas antes de adivinar la palabra, el juego muestra una pantalla de derrota.

## Tecnologías usadas

- **PHP**: Lógica del juego y gestión de sesiones.
- **HTML/CSS**: Interfaz de usuario.
