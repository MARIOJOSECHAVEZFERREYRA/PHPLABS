<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица цветов HTML</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: center; }
        .color-cell { height: 100px; width: 100%; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Красный</th>
            <th>Зеленый</th>
            <th>Синий</th>
        </tr>
        <?php
        for ($i = 0; $i <= 255; $i += 50) {
            echo "<tr>";
            echo "<td style='background-color: rgb($i, 0, 0); height: 100px;'></td>"; 
            echo "<td style='background-color: rgb(0, $i, 0); height: 100px;'></td>"; 
            echo "<td style='background-color: rgb(0, 0, $i); height: 100px;'></td>"; 
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
