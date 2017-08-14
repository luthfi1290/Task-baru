<?php
    require_once('index.php');
    require_once('hitung.php');

    if(isset($_POST['tambah']))
    {
        $hasil = $hitung->tambah();
        return $hasil;
    }elseif(isset($_POST['kurang']))
    {
        $hasil = $hitung->kurang();
        return $hasil;
    }elseif(isset($_POST['kali']))
    {
        $hasil = $hitung->kali();
        return $hasil;
    }elseif(isset($_POST['bagi']))
    {
        $hasil = $hitung->bagi();
        return $hasil;
    }
?>