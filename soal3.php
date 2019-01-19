<?php
    function draw_kotak($panjang){
    $kotak = true;
    $result = "";
    
    for ($i=0; $i < $panjang; $i++) { 
        for ($j=0; $j < $panjang; $j++) { 
            if($kotak)
                $result .="*";
            else
                $result .=" ";
            $kotak = !$kotak;
        }
        $result .="<br>";
    }
    echo "<pre>";
    echo $result;
}
draw_kotak(7);
draw_kotak(5);
