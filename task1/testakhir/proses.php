<?php
    abstract class struktur
    {
        abstract function getData($jari);
        abstract function getLuas();
        abstract function getKel();
    }

    class hitung extends struktur
    {
        public $jari;
        public function getData($jari)
        {
            $this->jari = $jari;
        }

        public function getLuas()
        {
            $r = $this->jari;
            if($r == 7 || $r == 14 || $r == 21 || $r == 28 || $r == 35)
            {
                $phi = 22 / 7;
            }else{
                $phi = 3.14;
            }
            $luas = $phi * $r * $r;
            return $luas;
        }

        public function getKel()
        {
            $r = $this->jari;
            $d = 2*$r;
            if($r == 7 || $r == 14 || $r == 21 || $r == 28 || $r == 35)
            {
                $phi = 22 / 7;
            }else{
                $phi = 3.14;
            }
            $kel = $phi * $d;
            return $kel;
        }
    }

    $tampil = new hitung();
    if(isset($_POST['submit']))
    {
        $jari = $_POST['jarijari'];
        $tampil->getData($jari);
    }
?>