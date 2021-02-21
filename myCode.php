<?php

 $a = 0;
 while ($a <= 200) {
    # code...
    $result ='';
    for ($i=0; $i < 12; $i++) {
        # code...
        $result .= mt_rand(0, 9); 
        
    }
    echo $result."<br>";
    $a++;
 }
 
?>