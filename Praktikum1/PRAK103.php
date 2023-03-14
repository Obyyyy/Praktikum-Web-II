<?php
    $celcius = 37.841;

    $fahrenheit = round((9/5) * $celcius + 32, 4);
    $reamur = round((4/5) * $celcius, 4);
    $kelvin = round($celcius + 273.15, 4);

    echo "Fahrenheit (F) = $fahrenheit<br>";
    echo "Reamur (R) = $reamur<br>";
    echo "Kelvin (K) = $kelvin<br>";
?>