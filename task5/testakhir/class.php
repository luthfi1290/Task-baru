<?php 
    class utama 
    {
        public function setData($text)
        {
            $myfile = fopen('task5.txt','a') or die('file tidak bisa dibuka');
            $isi = $text . "\n";
            fwrite($myfile,$isi);
            fclose($myfile);
        }

        public function getData()
        {
            $myfile = fopen('task5.txt','r') or die('file tidak bisa dibuka');
            $content = " " . "\n";
            if(!feof($myfile))
            {
                $content .= fread($myfile,filesize('task5.txt'));
            }
            fclose($myfile);
            return $content;
        }
    }
    if(isset($_POST['submit']))
    {
        $obj = new utama();
        $text = $_POST['text'];
        $obj->setData($text);
    }

?>