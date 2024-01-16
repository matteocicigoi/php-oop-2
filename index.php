<?php

require_once __DIR__ . '/controllers/controllerProdotti.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fine font awesome -->
</head>

<body>
    <header>
        <h1>PHP OOP 2</h1>
    </header>
    <main>
        <?php foreach ($prodotti as $prodotto) : ?>
            <article>
                <h2 class="titolo"><?php echo $prodotto->nome; ?></h2>
                <img src="database/img/<?php echo $prodotto->img; ?>" alt="<?php echo $prodotto->nome; ?>">
                <h2 class="info"><?php echo $prodotto->prezzo; ?>€ <?php echo $prodotto->getCategoria(); ?> <?php echo $prodotto->tipologia; ?></h2>
                <?php if ($prodotto->tipologia !== 'Prodotto') : ?>
                    <h2 class="altro"><?php echo $prodotto->getInfo() ?></h2>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </main>
</body>

</html>