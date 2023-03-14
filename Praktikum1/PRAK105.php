<!DOCTYPE html>
<head>
    <title>Document</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }

        #header_table{
            background-color: red;
            font-size: 25px;
            padding: 15px 1px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th id="header_table">Daftar Smartphone Samsung</th>
        </tr>
        <?php
            $arr = Array(1 => "Samsung Galaxy S22", 2 => "Samsung Galaxy S22+", 3 => "Samsung Galaxy A03", 4 => "Samsung Galaxy Xcover 5");
            foreach($arr as $hp){
                echo "<tr><td>$hp</td></tr>";
            }
    ?>
    </table>
</body>
</html>