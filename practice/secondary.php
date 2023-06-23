<?php
$cols = $rows = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
        th {
            font-weight: bold;
            background-color: darkgray;
        }
        
        td {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <table>
        <?php for ($i = 1; $i <= $rows; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= $cols; $j++) : ?>
                    <?php if ($i === 1 || $j === 1) : ?>
                        <th><?= $i * $j ?></th>
                    <?php else : ?>
                        <td><?= $i * $j ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
