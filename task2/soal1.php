<?php
    class utama
    {
        // public $nilai1;
        // public $nilai2;

        // public function setData($x,$y)
        // {
        //     $this->nilai1 = $x;
        //     $this->nilai2 = $y;
        // }

        // public function getData()
        // {
        //     echo $this->nilai1 . " " . $this->nilai2;
        // }

        public function swapbyvalue($x,$y)
        {
            $temp = $x;
            $x = $y;
            $y = $temp;
          
        }

        public function swapbyreference(&$x,&$y)
        {
            $temp = $x;
            $x = $y;
            $y = $temp;
            
        }
    }

    $obj = new utama();
    $a = 1;
    $b = 5;
    $obj->swapbyvalue($a,$b);
    echo "swap by value " . "<br>";
    echo "nilai x : " . $a;
    echo " nilai y : " . $b . "<br>";
    $obj->swapbyreference($a,$b);
    echo "swap by reference " . "<br>";
    echo "nilai x : " . $a;
    echo " nilai y : " . $b;
    
    
?>