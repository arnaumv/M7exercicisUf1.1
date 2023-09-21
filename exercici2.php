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
    <h2>Exercici 2</h2>

    <table>
        <tr>
            <?php
            $N1 = 7;

            for ($i = 65; $i <= 90; $i++) {
                $letra = chr($i);

                echo "<td>$letra</td>\n";
                $N1 = $N1 - 1;
                if ($N1 == 0) {
                    break;
                }
            }
            ?>
        </tr>

        <tr>
            <?php
            $N = 7;

            for ($i = 1; $i <= $N; $i++) {
                echo "<td>$i</td>\n";
            }
            ?>
        </tr>
    </table>
</body>
</html>
