<?php
// memanggil file atau class_lingkaran.php
require_once "Lingkaran.php";
require_once "PersegiPanjang.php";
require_once "Segitiga.php";
$lingkaran = new Lingkaran(14);
$lingkaran2 = new Lingkaran(28);
$persegi = new Persegipanjang(5, 3);
$persegi2 = new Persegipanjang(9, 5);
$segitiga = new Segitiga(10, 5);
$segitiga2 = new Segitiga(15, 10);
$bidang = [$lingkaran,$lingkaran2, $persegi,$persegi2, $segitiga, $segitiga2];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Bidang</title>
</head>

<body>

    <div class="border border-secondary rounded  bg-light">
        <h3 class="text-center">Tabel Kumpulan Bidang</h3>
        <div class=>
            <table class="table table-hover table-striped-columns">
                <tr class="table-success">
                    <th>Nomor</th>
                    <th>Nama Bidang</th>
                    <th>Keterangan</th>
                    <th>Luas Bidang</th>
                    <th>Keliling Bidang</th>
                </tr>
                <tr class="table-secondary">
                    <?php
                    $nomor = 1;
                    foreach ($bidang as $bid) {
                        echo '<tr><td>' . $nomor . '</td>';
                        $bid->mencetak();
                        echo '<tr/>';
                        $nomor++;
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>