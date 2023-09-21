<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black; 
            border-collapse: collapse; 
        }
    </style>
</head>

<body>
    <h2>Exercici 3</h2> <!-- Encabezado h2 -->

    <table> <!-- Inicio de la tabla HTML -->
        <?php
        $N = 7; // Variable N con valor 7
        $M = 0; // Variable M con valor 0

        for ($i = 0; $i <= $N; $i++) { // Inicio de un bucle for que genera filas de la tabla
            echo "<tr>"; // Inicio de una fila en la tabla

            for ($j = 0; $j <= $N; $j++) { // Bucle anidado que genera celdas en cada fila
                echo "<td>" . ($M + $j) . "</td>"; // Imprime una celda con un número calculado
            }

            echo "</tr>\n"; // Fin de la fila en la tabla y un salto de línea en HTML
            $M++; // Incremento de la variable M en cada iteración del bucle exterior
        }
        ?>
    </table> <!-- Fin de la tabla HTML -->
</body>
</html>
