<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP Illeniga Qunita Fidin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    $m1 = ['nim' => '191105237', 'nama' => 'Wendy Maria', 'nilai' => 24];
    $m2 = ['nim' => '1911060237', 'nama' => 'Gita Sri' => 45];
    $m3 = ['nim' => '1911060013', 'nama' => 'Ananda Angelia', 'nilai' => 17];
    $m4 = ['nim' => '1911060014', 'nama' => 'Salsabila', 'nilai' => 100];
    $m5 = ['nim' => '1911060232', 'nama' => 'Novia vina', 'nilai' => 65];
    $m6 = ['nim' => '1911060017', 'nama' => 'Thalia Talita', 'nilai' => 78];
    $m7 = ['nim' => '1911060014', 'nama' => 'Eka Nanda', 'nilai' => 84];
    $m8 = ['nim' => '1911184672', 'nama' => 'Surya Nata', 'nilai' => 33];
    $m9 = ['nim' => '1911001238', 'nama' => 'Angelia Putri', 'nilai' => 63];
    $m10 = ['nim' => '1911060007', 'nama' => 'Illeniga Qunita Fidin', 'nilai' => 90];

    $mahasiswasiswi = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $thjudul = [
        'No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Grade',
        'Predikat', 'Keterangan'
    ];

    $jumlah_mahasiswa = count($mahasiswasiswi);
    $nilai = array_column($mahasiswasiswi, 'nilai');
    $total_nilai = array_sum($nilai);
    $max_nilai = max($nilai);
    $min_nilai = min($nilai);
    $ratnil = $total_nilai / $jumlah_mahasiswa;

    $keterangan = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Nilai Tertinggi' => $max_nilai,
        'Nilai Terendah' => $min_nilai,
        'Rata-Rata Nilai' => $ratnil
    ];

    ?>
    <div class="container px-5 my-5">
        <h3 align="center">Daftar Nilai Mahasiswa</h3>

        <table class="table table-info table-striped">
            <thead>
                <tr>
                    <?php
                    foreach ($thjudul as $th) {
                    ?>
                    <th class="text-center"><?= $th ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswasiswi as $murid) {
                    $kett = ($murid['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                    $grade;
                    $predik;

                    if ($murid['nilai'] <= 100 && $murid['nilai'] >= 80) $grade = 'A';
                    else if ($murid['nilai'] <= 79 && $murid['nilai'] >= 70) $grade = 'B';
                    else if ($murid['nilai'] <= 69 && $murid['nilai'] >= 60) $grade = 'C';
                    else if ($murid['nilai'] <= 59 && $murid['nilai'] >= 31) $grade = 'D';
                    else if ($murid['nilai'] > 0 && $murid['nilai'] <= 30) $grade = 'E';
                    else $grade = 'TIDAK ADA DATA NILAI';

                    switch ($grade) {
                        case 'A':
                            $predik = 'Memuaskan';
                            break;
                        case 'B':
                            $predik = 'Bagus';
                            break;
                        case 'C':
                            $predik = 'Cukup';
                            break;
                        case 'D':
                            $predik = 'Kurang';
                            break;
                        case 'E':
                            $predik = 'Buruk';
                            break;
                        default:
                            $predik = '-';
                    }
                ?>
                <tr class="text-center">
                    <th> <?= $no++ ?> </th>
                    <td><?= $murid['nim'] ?></td>
                    <td><?= $murid['nama'] ?></td>
                    <td><?= $murid['nilai'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predik ?></td>
                    <td><?= $kett ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="6" class="text-center"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>