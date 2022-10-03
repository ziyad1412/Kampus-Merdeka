<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;

    // Buat Construct
    function __construct($r)
    {
        $this->jari = $r;
    }
    // Buat Method Luas Lingkaran
    function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }
    // Buat Method Keliling Lingkaran
    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
    // Buat Method Cetak
    public function mencetak()
    {
        echo '<td>'."Lingkaran". '</td>';
        echo '<td>'."Jari-jari : ".$this->jari. '</td>';
        echo '<td>'.$this->getLuas().'</td>';
        echo '<td>'.$this->getKeliling().'</td>';
    }
}
?>