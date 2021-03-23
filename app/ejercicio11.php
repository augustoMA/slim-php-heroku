<?php
    function calcularPotencia()
    {
        for($i = 1; $i<=4; $i++)
        {
            for($j=1; $j<=4; $j++)
            {
                echo $i." potenciado a la ".$j." es ".pow($i,$j);
                echo "<br>";
            }
        }
    }

    calcularPotencia();
?>