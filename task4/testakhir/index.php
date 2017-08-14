<html>
    <head>
        <title>Kalkulator</title>     
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <th colspan=3>kalkulator sederhana</th>
                </tr>
                <tr>
                     <td>First number </td>
                     <td>:</td>
                     <td><input type="number" name="first"></td>
                </tr>
                <tr>
                     <td>second number </td>
                     <td>:</td>
                     <td><input type="number" name="second"></td>
                </tr>
                <tr>
                    <td colspan=3><input type="submit" name="tambah" value="+" class="hitung">
                        <input type="submit" name="kurang" value="-" class="hitung">
                        <input type="submit" name="kali" value="*" class="hitung">
                        <input type="submit" name="bagi" value="/" class="hitung">
                    </td>
                </tr>
                <?php 
                    require_once('hitung.php');
                    require_once('hasil.php');
                ?>
                <tr>
                    <td colspan=3><input type="text" name="hasil" value="<?php echo $hasil; ?>" id="hasil" disabled></td>
                </tr>
            </table>   
        </form>   
    </body>
</html>