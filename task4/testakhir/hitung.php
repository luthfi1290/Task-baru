<?php
    require_once('index.php');
    class hitung{
        public $first_number;
        public $second_number;
    }

    class tambah extends hitung
    {
        public function tambah()
        {
            $hasil = $this->first_number + $this->second_number;
            return $hasil;
        }
    }

    class kurang extends tambah
    {
        public function kurang()
        {
            $hasil = $this->first_number - $this->second_number;
            return $hasil;
        }
    }

    class kali extends kurang
    {
        public function kali()
        {
            $hasil = $this->first_number * $this->second_number;
            return $hasil;
        }
    }

    class bagi extends kali
    {
        public function bagi()
        {
            $hasil = $this->first_number / $this->second_number;
            return $hasil;
        }
    }

    $hitung = new bagi();

    $hitung->first_number = $_POST['first'];
    $hitung->second_number = $_POST['second'];
?>