<html>
    <head>
        <title>Stream write and read</title>
        <style>
        table {
            width: auto;
        }

        #submit {
            margin-left: 35%;
        }

        </style>
    </head>
    <body>
        <?php 
        include_once('class.php');

        ?>
        <form action="index.php" method="post">
            <table>
                <caption>stream</caption>
                <tr>
                   <td>tulis</td>
                   <td>:</td>
                   <td><textarea rows="5" cols="30" name="text"></textarea></td>
                </tr>
                <tr>
                    <td colspan=3><input type="submit" name="submit" value="simpan" id="submit"></td>   
                </tr>
                <tr>
                    <td colspan=3><?php echo "isi dalam file task5.txt : " . $obj->getData()."<br>";?></td>   
                </tr>
                <tr>
                    <td colspan=3> <?php echo "Besar file task5.txt : " . filesize('task5.txt');?></td>   
                </tr>
            </table>
        </form>
    </body>
</html>