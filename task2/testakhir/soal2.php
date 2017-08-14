<html>
    <head>
        <title>evaluasi inputan</title>
    </head>
    <body>
        <?php 
        class data 
        {
            public $input;

            public function setData($i)
            {
                $this->input = $i;
            }

            public function evaluasi(){
                if(is_numeric($this->input))
                {
                    echo "yang anda masukkan adalah type data integer";
                }else
                {
                    echo "yang anda masukkan adalah type data string";
                }
            }
        
        }
        
        if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $obj = new data();
        $obj->setData($input);
        } 
        ?>
        <form action="" method="post">
            <table>
               <tr>
                    <td>Input</td>
                    <td>:</td>
                    <td><input type="text" name="input"></td>
               </tr>
               <tr>
                    <td colspan=3><input type="submit" name="submit" value="evaluasi!!"></td>
               </tr> 
               <tr>
                    <td colspan=3><?php echo $obj->evaluasi(); ?></td>
               </tr>
            </table>
        </form>
    </body>
</html>