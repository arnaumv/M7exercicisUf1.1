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
    <h2>Exercici 4</h2>

    <table>
        <?php
        $N = 7;

        echo '<tr><td> </td>';
        for ($i = 1; $i <= $N; $i++) {
            echo "<td>$i</td>";
        }
        echo '</tr>';

        for ($letras = 65; $letras <= 68; $letras++) {
            $letter = chr($letras);
            echo "<tr><td>$letter</td>";
            for ($i = 1; $i <= $N; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
