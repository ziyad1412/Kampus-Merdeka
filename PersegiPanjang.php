<?php
class Persegipanjang {
    public $panjang;
    public $lebar;
    // Buat Construct
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    // Buat Method Luas Persegi Panjang
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    // Buat Method Keliling Persegi Panjang
    function getKeliling(){
        return 2 * $this->panjang + $this->lebar;
    }
    // Buat Method Cetak
    public function mencetak()
    {
        echo '<td>'."Persegi Panjang". '</td>';
        echo '<td>'."Panjang : ".$this->panjang. ", Lebar : ".$this->lebar. '</td>';
        echo '<td>'.$this->getLuas().'</td>';
        echo '<td>'.$this->getKeliling().'</td>';
    }
}
?>