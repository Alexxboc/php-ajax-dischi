<?php
require '../php/db.php';
// var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="bg_primary">
    <header class="bg_transparent p-3">
        <div class="navbar">
            <div class="logo">
                <img width="60" src="./assets/img/logo-small.svg" />
            </div>
            <!-- /.logo -->
        </div>
        <!-- /.navbar -->
    </header>

    <main class="pt-5">
        <div class="container">
            <div class="row row-cols-5">
                <?php foreach ($data['response'] as $disc) : ?>
                    <div class="col gy-3">
                        <div class="card h-100 p-3 rounded-0 bg_transparent" style="width: 15rem">
                            <img src="<?= $disc['poster'] ?>" class="card-img-top img-fluid" alt="immagine <?= $disc['title'] ?>" />
                            <div class="card-body text-dark text-center">
                                <h2 class="card-title text_white text-uppercase fs-4 fw-bold mt-3">
                                    <?= $disc['title'] ?>
                                </h2>
                                <p class="card-text text_light fs-5 mt-3 mb-0 fw-bolder">
                                    <?= $disc['author'] ?>
                                </p>
                                <p class="card-text text_light fs-6 fw-bolder"><?= $disc['year']?></p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                <?php endforeach ?>
            </div>
            <!-- /.row row-cols-5 -->
        </div>
        <!-- /.container -->
    </main>
</body>

</html>