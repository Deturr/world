<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Table</title>
    <style>
        table {
            border-spacing: 10px;
            width: 50%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table border="2px">
            <?php
                foreach ($countries as $country) {
                    echo "<tr>";
                    echo "<td>" . $country->Name . "</td>";
                    echo "<td>" . $country->Code . "</td>";
                    echo "<td>" . number_format($country->Population, 0, ',', ' ') . "</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>
