<html>
    <head>
        <title>Download</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <th colspan=2>Download url</th>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Download"></td>
                    <td><input type="text" name="url" value="https://code.jquery.com/jquery-3.2.1.slim.min.js"></td>
                </tr>
            </table>
        </form>
        <?php 
        class curl 
        {
            public $data;
            public function setData($url)
            {
                $start = curl_init();
                curl_setopt($start, CURLOPT_URL, $url);
                curl_setopt($start, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($start, CURLOPT_CONNECTTIMEOUT, 5);
                $this->data = curl_exec($start);
                curl_close($start);
            }

            public function download($url)
            {
                $filename = basename($url); // nama file
                $fp = fopen("download/".$filename, 'w');
                fwrite($fp, $this->data);
                fclose($fp);
                echo 'File telah disimpan pada folder download dengan nama '.$filename;
            }
        }
        if(isset($_POST['submit'])){
            $obj = new curl;
            $url = $_POST['url'];
            $obj->setData($url);
            echo $obj->download($url);
        }
        ?>
    </body>
</html>