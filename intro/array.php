<?php
function printConcentricRectangle($n) {
   
    $matrix = array_fill(0, $n, array_fill(0, $n, 0));

  
    $start = 0;
    $end = $n - 1;
    

    $num = 7;

  
    while ($start <= $end) {
        for ($i = $start; $i <= $end; $i++) {
            $matrix[$start][$i] = $num; 
            $matrix[$end][$i] = $num;   
            $matrix[$i][$start] = $num; 
            $matrix[$i][$end] = $num;   
        }
       
        $start++;
        $end--;
        $num--; 
    }


    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $matrix[$i][$j] . " "; 
        }
        echo "<br>"; 
    }
}

printConcentricRectangle(7);
?>
