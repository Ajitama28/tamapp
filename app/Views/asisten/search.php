<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pendaftaran Asisten</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3" style="width: 35rem;">
                    <div class="card-body">
                        <h1>Cari Asisten Praktikum</h1>
                        <form action="/asisten/search" method="post">
                            <?= csrf_field() ?>
                            Search: <input type="text" name="key" ?>
                            <input type="submit" name="submit" value="Search" />
                        </form>

                        <?php
                        if (!empty($hasil)) {
                            echo "<h1>Hasil Pencarian </h1>";
                            echo "Nama: " . $hasil['NAMA'];
                            echo "<br>Praktikum: " . $hasil['PRAKTIKUM'];
                            echo "<br>IPK: " . $hasil['IPK'];
                        }
                        ?>
                        <div class="mt-3">
                            <a href="/AsistenController/tampil" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>