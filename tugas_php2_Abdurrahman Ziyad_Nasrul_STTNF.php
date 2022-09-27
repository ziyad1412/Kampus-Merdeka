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


    <!-- Form Section -->
    <form method="POST">
        <h3 class="text-center">Form Input Pegawai</h3>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pegawai</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Pegawai" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="agama" class="col-4 col-form-label">Agama</label>
            <div class="col-8">
                <select id="agama" name="agama" class="custom-select">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jabatan</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jabatan" id="jabatan_0" type="radio" class="custom-control-input" value="Manager">
                    <label for="jabatan_0" class="custom-control-label">Manager</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jabatan" id="jabatan_1" type="radio" class="custom-control-input" value="Asisten">
                    <label for="jabatan_1" class="custom-control-label">Asisten</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jabatan" id="jabatan_2" type="radio" class="custom-control-input" value="Kabag">
                    <label for="jabatan_2" class="custom-control-label">Kabag</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jabatan" id="jabatan_3" type="radio" class="custom-control-input" value="Staff">
                    <label for="jabatan_3" class="custom-control-label">Staff</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Status</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="status" id="status_0" type="radio" class="custom-control-input" value="Menikah">
                    <label for="status_0" class="custom-control-label">Menikah</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="status" id="status_1" type="radio" class="custom-control-input" value="Belum">
                    <label for="status_1" class="custom-control-label">Belum</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="anak" class="col-4 col-form-label">Jumlah Anak</label>
            <div class="col-8">
                <input id="anak" name="anak" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <!-- Logic PHP -->
    <?php
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $anak = $_POST['anak'];
    $submit = $_POST['submit'];

    // Logic Gaji

    switch ($jabatan) {
        case 'Manager':
            $gaji_pokok = 20000000;
            break;
        case 'Asisten':
            $gaji_pokok = 15000000;
            break;
        case 'Kabag':
            $gaji_pokok = 10000000;
            break;
        case 'Staff':
            $gaji_pokok = 4000000;
            break;
        default:
            $gaji_pokok = '';
    }

    // Logic Tunjangan Jabatan
    $tunjangan = $gaji_pokok * 0.2;

    // Logic Tunjangan Keluarga

    if ($status == 'Menikah' && $anak >= 1 && $anak <= 2) $tunjangan_keluarga = $gaji_pokok * 0.5;
    else if ($status == 'Menikah' && $anak >= 3 && $anak <= 5) $tunjangan_keluarga = $gaji_pokok * 0.1;
    else if ($status == 'Menikah' && $anak >= 6) $tunjangan_keluarga = $gaji_pokok * 0.15;
    else if ($status == 'Belum') $tunjangan_keluarga = 0;

    // Logic Gaji Kotor
    $gaji_kotor = $gaji_pokok + $tunjangan + $tunjangan_keluarga;

    // Logic Zakat Profesi
    $zakat_profesi = $agama == "Islam" && $gaji_kotor >= 6000000 ? 0.025 * $gaji_kotor : 0;

    // Logic Take Home Pay
    $take_home_pay = $gaji_kotor - $zakat_profesi;

    ?>

<div class="border border-secondary rounded  bg-light">
                <h3 class="text-center">Tabel Gaji Pegawai</h3>
                <div class=>
                    <table class="table table-hover table-striped-columns">
                        <tr class="table-success">
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Keluarga</th>
                            <th>Gaji Kotor</th>
                            <th>Zakat Profesi</th>
                            <th>Take Home Pay</th>
                        </tr>
                        <?php if (isset($submit)) : ?>
                            <tr class="table-secondary">
                                <td><?= $nama; ?></td>
                                <td><?= $jabatan; ?></td>
                                <td><?= $agama; ?></td>
                                <td>Rp. <?= $gaji_pokok ?></td>
                                <td>Rp. <?= $tunjangan ?></td>
                                <td>Rp. <?= $tunjangan_keluarga ?></td>
                                <td>Rp. <?= $gaji_kotor?></td>
                                <td>Rp. <?= $zakat_profesi?></td>
                                <td>Rp. <?= $take_home_pay?></td>
                            </tr>
                        <?php endif ?>
                    </table>
                </div>
            </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>