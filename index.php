<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Cuccia.php';
include_once __DIR__ . '/Models/Toys.php';

$categoriaGatto = new Category('gatto', "caticon");
$categoriaCane = new Category('cane', "dogicon");

$prodotto1 = new Product("prodottouno", 55, "./img/default-img.gif", "lorem lorem lorem bla bla ", $categoriaCane);
$prodotto2 = new Product("prodottodue", 10, "./img/default-img.gif", "lorem lorem lorem bla bla ", $categoriaGatto);
$cibo1 = new Food("croccantini", 55, "./img/Stocks.jpeg", "lorem lorem lorem", $categoriaCane, "croccantini", 44, "carne di polletto");
$cibo2 = new Food("umido", 55, "./img/cibogatto.webp", "lorem lorem lorem", $categoriaGatto, "croccantini", 44, "verdure");
$cuccia1 = new Cuccia("cuccia", 44, "./img/index.jpeg", "lorem lorem", $categoriaCane, "44x55x60");
$toys1 = new Toys("cuccia", 30, "./img/images.jpeg", "lorem lorem lorem", $categoriaGatto, "gomma");
var_dump($cibo1);
var_dump($cibo2);
var_dump($cuccia1);
var_dump($toys1);
var_dump($prodotto1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h5><?php echo $prodotto1->getTitle() ?></h5>
            <p><?php echo $prodotto1->category->sgetIcon() ?></p>
            <img src="<?php echo $prodotto1->getImg() ?>" alt="Immagine dell'oggetto" class="card-img-top">
            <div class="card-body">
                <p class="card-text">
                    <?php echo $prodotto1->getDesc() ?>
                </p>
                <strong>Prezzo: $ <?php echo $prodotto1->getPrezzo() ?></strong>
            </div>
        </div>

    </div>

    </div>

</body>

</html>