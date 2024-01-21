<?php 

$data = file_get_contents('data/pizza.json');
//ubah json jadi array
$menu = json_decode($data, true);
$menu = $menu['menu'];
// var_dump($menu["menu"][0]["nama"]);
// echo $menu[0]["nama"];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPU Hut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="120" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="row mt-3">
                <div class="col">
                    <h1>All Menu</h1>
                </div>
            </div>

            <div class="row">
                <?php foreach($menu as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"]; ?></h5>
                            <p class="card-text"><?= $row["deskripsi"]; ?></p>
                            <h5 class="card-title">Rp. <?= $row["harga"]; ?></h5>
                            <a href="#" class="btn btn-primary">Pesan Sekarang!</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>