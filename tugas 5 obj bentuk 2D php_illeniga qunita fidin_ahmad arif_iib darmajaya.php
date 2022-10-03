<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 PHP Illeniga Qunita Fidin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 align="center">Daftar Bidang Bentuk 2D</h1>
    <br>
    <?php
    require_once 'Lingkaran.php';
    require_once 'Persegi.php';
    require_once 'Segitiga.php';

    $bdg1 = new Lingkaran(7);
    $bdg2 = new PersegiPanjang(10,15);
    $bdg3 = new PersegiPanjang(5,10);
    $bdg4 = new Segitiga(5,10,10);
    $bdg5 = new Segitiga(15,10,5);
    $thead = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

    $bidang2 =[$bdg1,$bdg2,$bdg3,$bdg4,$bdg5];
    ?>
    <center>
        <table class="table table-info" style="width: 80%; text-align: center;">
            <thead>
                <tr>
                    <?php
                foreach ($thead as $th) { ?>
                    <th><?= $th ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
            $no = 1;
            foreach ($bidang2 as $ling) { ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $ling->namaBidang(); ?></td>
                    <td><?= $ling->keterangan(); ?></td>
                    <td><?= $ling->luasBidang(); ?> Cm</td>
                    <td><?= $ling->kelilingBidang(); ?> Cm</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>

</body>

</html>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>