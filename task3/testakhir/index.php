<html>
    <head>
        <title>Mengurutkan input</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php 
            include_once('class.php');
            if(isset($_POST['submit']))
            {
                $obj = new utama($_POST['i1'],$_POST['i2'],$_POST['i3'],$_POST['i4'],$_POST['i5'],
                $_POST['i6'],$_POST['i7'],$_POST['i8'],$_POST['i9'],$_POST['i10']);
            }

            if(isset($_POST['random']))
            {
                $obj = new utama(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),
                rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
            }
        ?>
        <form action="index.php" method="post">
            <table>
            <caption>Sorting Array</caption>
               <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="i1" class="input">
                        <input type="number" name="i2" class="input">
                        <input type="number" name="i3" class="input">
                        <input type="number" name="i4" class="input">
                        <input type="number" name="i5" class="input">
                        <input type="number" name="i6" class="input">
                        <input type="number" name="i7" class="input">
                        <input type="number" name="i8" class="input">
                        <input type="number" name="i9" class="input">
                        <input type="number" name="i10"class="input">
                    </td>
               </tr>
               <tr>
                    <td colspan=3>
                        <input type="submit" name="submit" value="sorting" id="submit">
                        <input type="submit" name="random" value="random" >
                    </td>
               </tr>
               <tr>
                    <td>Hasil sorting</td>
                    <td>:</td>
                    <td>
                        <?php echo $obj->output();?>
                    </td>
               </tr>
                
            </table>
        </form>
    </body>
</html>