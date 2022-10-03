<?php
class Segitiga {
    public $alas;
    public $tinggi;
    public $sisi;
    // Buat Construct
    function __construct($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
    }
    // Buat Method Luas Segitiga
    function getLuas()
    {
        return ($this->alas * $this->tinggi) / 2;
    }
    // Buat Method Keliling Segitiga
    function getKeliling(){
        return $this->alas + $this->alas + $this->alas;
    }
    // Buat Method Cetak
    public function mencetak()
    {
        echo '<td>'."Segitiga". '</td>';
        echo '<td>'."Alas : ".$this->alas. ", Tinggi : ".$this->tinggi. '</td>';
        echo '<td>'.$this->getLuas().'</td>';
        echo '<td>'.$this->getKeliling().'</td>';
    }
}
