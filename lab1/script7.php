<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Таблица умножения</h2>
    <table>
        
        <tr>
            <th>x</th>
            <?php for ($head = 1; $head <= 10; $head++){  ?>
                <th><?= $head ?></th>
            <?php } ?>
        </tr>

        <?php for ($row = 1; $row <= 10; $row++){  ?>
            
            <tr>
                <th><?= $row ?></th>

                <?php for ($col = 1; $col <= 10; $col++){ ?>
                    <td><?= $row * $col ?></td>
                <?php } ?>

            
            </tr>
        <?php } ?>
    </table>
</body>
</html>
