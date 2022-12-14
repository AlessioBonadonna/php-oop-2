<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Cuccia.php';
include_once __DIR__ . '/Models/Toys.php';

$categoriaGatto = new Category('gatto', "./img/cat.png");
$categoriaCane = new Category('cane', "./img/icon-dog.png");


$cibo1 = new Food("Croc Gnam Gnam", 55, "./img/Stocks.jpeg", "super croccantini per il tuo cane ", $categoriaCane, "croccantini", 44, "carne di polletto");
$cibo2 = new Food("CatsLove U ", 20, "./img/cibogatto.webp", "Cibo umido adatto per tutti i gatti ", $categoriaGatto, "umido", 22, "verdure");
$cuccia1 = new Cuccia("Qui dormo io ", 44, "./img/index.jpeg", "Super cuccia attrezzata per il tuo cane ", $categoriaCane, "44x55x60");
$toys1 = new Toys("Paperella", 15, "./img/images.jpeg", "Paperella perfetta per il tuo cane che si finge programmatore o viceversa", $categoriaCane, "gomma");
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
    <?php include __DIR__ . '/partials/header.php'
    ?>
    <div class="container d-flex flex-wrap">


        <div class="card col-3 m-3">
            <h5><?php echo $cibo1->getTitle() ?></h5>
            <img class="w-25 icon" src="<?php echo $cibo1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cibo1->getImg() ?>" alt="<?php echo $cibo1->getTitle() ?>" class="card-img-top mt-3 ">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cibo1->getDesc() . "<br>" . $cibo1->getpeso() . " grammi <br>" . $cibo1->getingredienti()

                    ?>
                </p>
                <strong>Prezzo: $ <?php echo $cibo1->getPrezzo() ?></strong>
                <p><?php ?></p>
            </div>
        </div>




        <div class="card col-3 m-3">
            <h5><?php echo $cibo2->getTitle() ?></h5>
            <img class="w-25 icon" src="<?php echo $cibo2->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cibo2->getImg() ?>" alt="<?php echo $cibo2->getTitle() ?>" class="card-img-top mt-3">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cibo2->getDesc() . "<br>" . $cibo2->getpeso() . " grammi <br>" . $cibo2->getingredienti()

                    ?>
                </p>
                <strong>Prezzo: $ <?php echo $cibo2->getPrezzo() ?></strong>
            </div>
        </div>



        <div class="card col-3 m-3">
            <h5><?php echo $cuccia1->getTitle() ?></h5>
            <img class="w-25 icon" src="<?php echo $cuccia1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $cuccia1->getImg() ?>" alt="<?php echo $cuccia1->getTitle() ?>"
                class="card-img-top mt-3 ">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $cuccia1

                        ->getDesc() . "<br>" . $cuccia1->getSize() ?>
                </p>
                <strong>Prezzo: $ <?php echo $cuccia1

                                        ->getPrezzo() ?></strong>
            </div>
        </div>




        <div class="card col-3 m-3">
            <h5><?php echo $toys1->getTitle() ?></h5>
            <img class="w-25 icon" src="<?php echo $toys1->category->sgetIcon() ?>" alt="">
            <img src="<?php echo $toys1->getImg() ?>" alt="<?php echo $toys1->getTitle() ?>" class="card-img-top mt-3 ">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $toys1->getDesc() . "<br> <br>" . $toys1->getMateriale() ?>
                </p>
                <strong>Prezzo: $ <?php echo $toys1->getPrezzo() ?></strong>
            </div>
        </div>


    </div>

    </div>
    <?php
    include __DIR__ . "/partials/footer.php";
    ?>
</body>

</html>