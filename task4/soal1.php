<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
        <table>
            <form action="soal1.php" method="post">
                <tr>
                    <td>Angka 1</td>
                    <td>:</td>
                    <td><input type="number" name="angka1" ></td>
                </tr>
                <tr>
                    <td>Angka 2</td>
                    <td>:</td>
                    <td><input type="number" name="angka2" ></td>
                </tr>
                <tr>
                    <td colspan=3><input type="submit" name="submit" value="bagi"></td>
                </tr>
            </form>
        </table>
        <?php 
            class Kalkulator
            {
                public function bagi($first,$second)
                {
                    if($second == 0)
                    {
                        throw new Exception("Nilai akan tak terhingga");
                        
                    }

                    $hasil = $first / $second;
                    return $hasil;

                }
            }
            if(isset($_POST['submit'])){
            $obj = new kalkulator;
            try {
            echo $obj->bagi($_POST['angka1'],$_POST['angka2']);
            }
            catch(exception $e) {
                echo 'message : ' .$e->getMessage(); 
            }
            echo $obj->bagi();
            }
        ?>
    </body>
</html>