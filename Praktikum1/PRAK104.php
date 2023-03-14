<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
            $arr = Array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
            for($i = 0; $i<sizeof($arr); $i++){
                echo "<tr><td>$arr[$i]</td></tr>";
            }
    ?>
    </table>
</body>
</html>