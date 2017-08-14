<?php 
class utama 
{
    protected $data;
    public $hasil;
    public function __CONSTRUCT($i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9,$i10){
        $this->data[0] = $i1;
        $this->data[1] = $i2;
        $this->data[2] = $i3;
        $this->data[3] = $i4;
        $this->data[4] = $i5;
        $this->data[5] = $i6;
        $this->data[6] = $i7;
        $this->data[7] = $i8;
        $this->data[8] = $i9;
        $this->data[9] = $i10;
    }

    public function sorting($data)
    {
        for($i = 0;$i< count($data);$i++)
        {
            for($j = 0;$j < count($data)-1;$j++)
            {
                if($data[$i] > $data[$j])
                {
                    $temp = $data[$i];
                    $data[$i] = $data[$j];
                    $data[$j] = $temp;
                }
            }
        }
        return $data;
    }

    public function output()
    {
        $hasil = $this->sorting($this->data);
        for($i = 0 ; $i < count($hasil);$i++)
        {
            echo '<input type="number" value="'.$hasil[$i].'" class="output" readonly> ';
        }
    }
}
?>