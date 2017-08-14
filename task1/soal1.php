<html>
    <head>
        <title>Menampilkan nama dan alamat</title>
        <style>
        #input {
            margin-left: 30%;
        }

        .hasil {
            color: red;
        }

        .umur { 
            width:50px;
        }
        </style>
    </head>
    <body>
        <form action="#" method="post">
            <table>
                <caption>input nama dan alamat</caption>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="masukkan nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="masukkan alamat"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur" placeholder="masukkan umur" maxlength=2 class="umur"></td>
                </tr>
                <tr>
                    <td>Golongan darah</td>
                    <td>:</td>
                    <td><input type="text" name="gol" placeholder="masukkan golongan darah" class="umur" maxlength=1></td>
                </tr>
                <tr>
                    <td colspan=3><input type="submit" name="submit" value="kirim" id="input">
                    <input type="reset"></td>
                </tr>
                <?php
                abstract class struktur 
                {
                    abstract function getNama($nama);
                    abstract function getAlamat($alamat);
                    abstract function getUmur($umur);
                    abstract function getGol($gol);
                    abstract function simpanData($nama,$alamat,$umur,$gol);
                }
                class setData extends struktur 
                {
                    public function getNama($nama){
                        echo $nama;
                    }

                    public function getAlamat($alamat){
                        echo $alamat;
                    }

                    public function getUmur($umur){
                        echo $umur;
                    }

                    public function getGol($gol){
                        echo $gol;
                    }

                    public function simpanData($nama,$alamat,$umur,$gol){
                        $file = fopen('hasil1.txt','a') or die('tidak bisa buka file');
                        $isi = "Nama : " . $nama . " Alamat : " . $alamat . " Umur : " . $umur . " Gol :". $gol ."\n";
                        fwrite($file,$isi);
                        fclose($file);
                    }
                }
                $output = new setData();
                if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $umur = $_POST['umur'];
                $gol = $_POST['gol'];
                $output->simpanData($nama,$alamat,$umur,$gol);
                }   

                ?>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="hasil nama" value="<?php echo $output->getNama($nama);?>" class="hasil" disabled></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"  placeholder="hasil alamat" value="<?php echo $output->getAlamat($alamat);?>" class="hasil" disabled></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur" placeholder="hasil umur" value="<?php echo $output->getUmur($umur);?>" class="umur hasil" disabled></td>
                </tr>
                <tr>
                    <td>golongan darah</td>
                    <td>:</td>
                    <td><input type="text" name="gol"  placeholder="hasil golongan darah" value="<?php echo $output->getGol($gol);?>" class="umur hasil" disabled></td>
                </tr>
            </table>
        </form>
    </body>
</html>