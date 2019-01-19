<?php
function print_abc($col,$row){
    $x = 0;
    $abjad = range('a', 'z');
    for ($i=0; $i < $row; $i++) { 
        for ($j = 1; $j <= $col; $j++) {
            echo $abjad[$x].'&nbsp;';  
            $x++;
        }
        echo "<br>";
    }
}
print_abc(3,4);
