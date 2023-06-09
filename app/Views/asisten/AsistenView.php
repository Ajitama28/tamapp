<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Daftar Asisten Praktikum</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">PRAKTIKUM</th>
                            <th scope="col">IPK</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $t) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $t['NIM']; ?></td>
                                <td><?= $t['NAMA']; ?></td>
                                <td><?= $t['PRAKTIKUM']; ?></td>
                                <td><?= $t['IPK']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="mt-3">
                    <a href="/AsistenController/simpan" class="btn btn-primary">Simpan</a>
                    <a href="/AsistenController/update" class="btn btn-primary">Update</a>
                    <a href="/AsistenController/search" class="btn btn-primary">Search</a>
                    <a href="/AsistenController/delete" class="btn btn-primary">Delete</a>
                    <a href="/AsistenController/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>