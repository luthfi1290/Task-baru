<?php 
   
    $data = function(){
        $p = 10;
        $l = 3;
        $luas = $p * $l;
        return $luas;
    };


    function luas($callback){
        echo "luas persegi panjang adalah " . $callback();
    }

    luas($data);



?>