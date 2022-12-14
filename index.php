<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Cuccia.php';
include_once __DIR__ . '/Models/Toys.php';

$categoriaGatto = new Category('gatto', "./img/cat.png");
$categoriaCane = new Category('cane', "./img/icon-dog.png");

$prodotto1 = new Product("prodottouno", 55, "./img/default-img.gif", "lorem lorem lorem bla bla ", $categoriaCane);
$prodotto2 = new Product("prodottodue", 10, "./img/default-img.gif", "lorem lorem lorem bla bla ", $categoriaGatto);
$cibo1 = new Food("croccantini", 55, "./img/Stocks.jpeg", "lorem lorem lorem", $categoriaCane, "croccantini", 44, "carne di polletto");
$cibo2 = new Food("umido", 55, "./img/cibogatto.webp", "lorem lorem lorem", $categoriaGatto, "croccantini", 44, "verdure");
$cuccia1 = new Cuccia("cuccia", 44, "./img/index.jpeg", "lorem lorem", $categoriaCane, "44x55x60");
$toys1 = new Toys("cuccia", 30, "./img/images.jpeg", "lorem lorem lorem", $categoriaGatto, "gomma");
// var_dump($cibo1);
// var_dump($cibo2);
// var_dump($cuccia1);
// var_dump($toys1);
// var_dump($prodotto1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex flex-wrap
    ">
        <div class="card  col-3 m-3 ">
            <h5><?php echo $prodotto1->getTitle() ?></h5>
            <img class="w-25" src="<?php echo $prodotto1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $prodotto1->getImg() ?>" alt="<?php echo $prodotto1->getTitle() ?>"
                class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $prodotto1->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $prodotto1->getPrezzo() ?></strong>
            </div>
        </div>

        <div class="card col-3 m-3">
            <h5><?php echo $cibo1->getTitle() ?></h5>
            <img class="w-25" src="<?php echo $cibo1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cibo1->getImg() ?>" alt="<?php echo $cibo1->getTitle() ?>" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cibo1->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $cibo1->getPrezzo() ?></strong>
            </div>
        </div>
        <div class="card col-3 m-3">
            <h5><?php echo $cibo2->getTitle() ?></h5>
            <img class="w-25" src="<?php echo $cibo2->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cibo2->getImg() ?>" alt="<?php echo $cibo2->getTitle() ?>" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cibo2->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $cibo2->getPrezzo() ?></strong>
            </div>
        </div>
        <div class="card col-3 m-3">
            <h5><?php echo $cuccia1->getTitle() ?></h5>
            <img class="w-25" src="<?php echo $cuccia1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cuccia1->getImg() ?>" alt="<?php echo $cuccia1
                                                                    ->getTitle() ?>" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cuccia1

                        ->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $cuccia1

                                        ->getPrezzo() ?></strong>
            </div>
        </div>
        <div class="card col-3 m-3">
            <h5><?php echo $toys1->getTitle() ?></h5>
            <img class="w-25" src="<?php echo $toys1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $toys1->getImg() ?>" alt="<?php echo $toys1->getTitle() ?>" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $toys1->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $toys1->getPrezzo() ?></strong>
            </div>
        </div>


    </div>

    </div>

</body>

</html>