<html>
    <head>
        <title>Mengevaluasi nilai input</title>
        <style>
            table {
                width: 300px;
            }
        </style>
    </head>
    <body>
        <?php 
        class konversi 
        {
            private $nilaiakhir;
            private $tugas,$uts,$uas;

            public function __CONSTRUCT($input,$input2,$input3)
            {
                $this->nilaiakhir = ($this->tugas = $input +
                $this->uts = $input2 +
                $this->uas = $input3)/3;

                
            }

            public function konversi() 
            {
                if($this->nilaiakhir >= 80)
                {
                    $hasil = "A";
                    echo "Selamat anda mendapatkan nilai : " . $hasil;
                }elseif ($this->nilaiakhir >= 65 && $this->nilaiakhir < 80) {
                    $hasil = "B";
                    echo "Selamat anda mendapatkan nilai : " . $hasil;
                }elseif ($this->nilaiakhir >= 45 && $this->nilaiakhir < 65) {
                    $hasil = "C";
                    echo "Selamat anda mendapatkan nilai : " . $hasil;
                }elseif ($this->nilaiakhir >= 30 && $this->nilaiakhir < 45) {
                    $hasil = "D";
                    echo "Selamat anda mendapatkan nilai : " . $hasil;
                }else{
                    $hasil = "E";
                    echo "Selamat anda mendapatkan nilai : " . $hasil;
                }
            }
        }
        if(isset($_POST['submit'])){
        $obj = new konversi($_POST['tugas'],$_POST['uts'],$_POST['uas']);
        }
        ?>
        <form action="" method="post">
            <table>
               <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas"></td>
               </tr> 
               <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts"></td>
               </tr>
               <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas"></td>
               </tr>
               <tr>
                    <td colspan=3><input type="submit" name="submit" value="konversi"></td>
               </tr>
               <tr>
                    <td colspan=3><?php echo $obj->konversi();?></td>
               </tr>
            </table>
        </form>
    </body>
</html>