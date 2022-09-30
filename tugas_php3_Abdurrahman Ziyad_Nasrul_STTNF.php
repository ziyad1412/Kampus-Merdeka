<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    $m1 = ['id' => 1, 'nim' => '00101', 'nama' => 'Abdurrahman', 'nilai' => 99];
    $m2 = ['id' => 2, 'nim' => '00102', 'nama' => 'Ziyad', 'nilai' => 60];
    $m3 = ['id' => 3, 'nim' => '00103', 'nama' => 'Ahmad', 'nilai' => 80];
    $m4 = ['id' => 4, 'nim' => '00104', 'nama' => 'Dahlan', 'nilai' => 40];
    $m5 = ['id' => 5, 'nim' => '00105', 'nama' => 'Aldi', 'nilai' => 90];
    $m6 = ['id' => 6, 'nim' => '00106', 'nama' => 'Mahardiansyah', 'nilai' => 20];
    $m7 = ['id' => 7, 'nim' => '00107', 'nama' => 'Aisyah', 'nilai' => 95];
    $m8 = ['id' => 8, 'nim' => '00108', 'nama' => 'Mutmainnah', 'nilai' => 88];
    $m9 = ['id' => 9, 'nim' => '00109', 'nama' => 'Salma', 'nilai' => 79];
    $m10 = ['id' => 10, 'nim' => '00110', 'nama' => 'Maul', 'nilai' => 51];
    $ar_nilai = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
    $jumlah_mahasiswa = count($ar_nilai);
    $jml_nilai = array_column($ar_nilai, 'nilai');
    $total_nilai = array_sum($jml_nilai);
    $max_nilai = max($jml_nilai);
    $min_nilai = min($jml_nilai);
    $rata2 = $total_nilai / $jumlah_mahasiswa;
    
    $keterangan = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Total Nilai' => $total_nilai,
        'Nilai Tertinggi' => $max_nilai,
        'Nilai Terendah' => $min_nilai,
        'Rata-Rata Nilai' => $rata2
    ];
    ?>

    <h2 align="center">Daftar Nilai Mahasiswa</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Grade</th>
                <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $nilai) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $nilai['nim'] . '</td>';
                echo '<td>' . $nilai['nama'] . '</td>';
                echo '<td>' . $nilai['nilai'] . '</td>';
                if ($nilai['nilai'] >= 85 && $nilai['nilai'] <= 100) $grade = 'A';
                else if ($nilai['nilai'] >= 75 && $nilai['nilai'] < 85) $grade = 'B';
                else if ($nilai['nilai'] >= 60 && $nilai['nilai'] < 75) $grade = 'C';
                else if ($nilai['nilai'] >= 30 && $nilai['nilai'] < 60) $grade = 'D';
                else if ($nilai['nilai'] >= 0 && $nilai['nilai'] < 30) $grade = 'E';
                else $grade = '';
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    default:
                        $predikat = '';
                }
                echo '<td>' . $predikat . '</td>';
                echo '<td>' . $grade . '</td>';
                $ket = ($nilai['nilai'] >= 55) ? "Lulus" : "Gagal";
                echo '<td>' . $ket . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
        <tfoot class="thead-dark">
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>