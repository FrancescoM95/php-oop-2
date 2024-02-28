<?php

require __DIR__ . '/data/products.php';

$food_products = array_filter($products, fn ($p) => $p::$type === 'food');
$toy_products = array_filter($products, fn ($p) => $p::$type === 'toy');
$kennel_products = array_filter($products, fn ($p) => $p::$type === 'kennel');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="OOP Shop">
    <title>OOP Shop</title>

    <!--§ font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container my-4">
        <section id="food">
            <h2 class="my-4">CIBO <i class="<?= Food::$icon ?>"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($food_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?= $product->getCategory()->getName() ?>
                                <i class="<?= $product->getCategory()->getIcon() ?>"></i></h2>
                            </div>
                            <img src="<?= $product->getImage() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getName() ?></h5>
                                <p>Prezzo: <?= $product->getPrice() ?>€</p>
                                <p>Ingredienti: <?= $product->listIngredients() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="toy">
            <h2 class="my-4">GIOCHI <i class="<?= Toy::$icon ?>"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($toy_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?= $product->getCategory()->getName() ?>
                                <i class="<?= $product->getCategory()->getIcon() ?>"></i></h2>
                            </div>
                            <img src="<?= $product->getImage() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getName() ?></h5>
                                <p>Prezzo: <?= $product->getPrice() ?>€</p>
                                <p>Materiali: <?= $product->listMaterials() ?></p>
                                <p>Colore: <?= $product->getColor() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>

        <section id="kennel" class="my-5">
            <h2 class="my-4">ACCESSORI <i class="<?= Kennel::$icon ?>"></i></h2>
            <div class="row row-cols-4">
                <?php foreach ($kennel_products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?= $product->getCategory()->getName() ?>
                                <i class="<?= $product->getCategory()->getIcon() ?>"></i></h2>
                            </div>
                            <img src="<?= $product->getImage() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getName() ?></h5>
                                <p>Prezzo: <?= $product->getPrice() ?>€</p>
                                <p>Misure: <?= $product->getSize() ?></p>
                                <p>Colore: <?= $product->getColor() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
    </main>

</body>

</html>