<?php 
  class data 
  {
      public $panjang;
      public $lebar;
      public function setData($panjang,$lebar)
      {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
      }

      public function luas()
      {
          $p = $this->panjang;
          $l = $this->lebar;
          $luas = $p * $l;
          return $luas;
      }

      public function keliling()
      {
          $p = $this->panjang;
          $l = $this->lebar;
          $keliling = 2*($p+$l);
          return $keliling;
      }
  }
  $tampil = new data;
  if(isset($_POST['submit']))
  {
      $panjang = $_POST['panjang'];
      $lebar = $_POST['lebar'];
      $tampil->setData($panjang,$lebar);
  }
?>
<html>
    <head>
        <title>Menghitung luas dan keliling persegi panjang</title>
        <style>
        #input {
            margin-left: 30%;
        }

        .input2 {
            width: 100%;
        }

        .hasil {
            color: red;
            width:100%;
        }
        </style>
    </head>
    <body>
        <form action="soal2.php" method="post">
            <table>
               <caption>menghitung luas dan keliling persegi panjang</caption>
               <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" class="input2"></td>
               </tr>
               <tr>
                    <td>lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" class="input2"></td>
               </tr>
               <tr>
                    <td colspan=3><input type="submit" name="submit" value="hitung" id="input">
                    <input type="reset"></td>
                </tr>
                <tr>
                    <td>Luas</td>
                    <td>:</td>
                    <td><input type="text" name="luas" placeholder="hasil luas" value="<?php echo $tampil->luas();?>" class="hasil" disabled></td>
                </tr>
                <tr>
                    <td>Keliling</td>
                    <td>:</td>
                    <td><input type="text" name="keliling"  placeholder="hasil keliling" value="<?php echo $tampil->keliling();?>" class="hasil" disabled></td>
                </tr>     
            </table>
        </form>
    </body>
</html>