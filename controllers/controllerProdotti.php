<?php
// classi
require_once __DIR__ . '/../models/Prodotto.php';
require_once __DIR__ . '/../models/Cibo.php';
require_once __DIR__ . '/../models/Cuccia.php';
require_once __DIR__ . '/../models/Gioco.php';

//database
$database = json_decode(file_get_contents( __DIR__ . '/../database/database.json'));

//istanze
$prodotti = [];
foreach ($database as $elemento) {
    if ($elemento->tipologia === 'Cibo') {
        $altro = 'scadenza';
    } elseif ($elemento->tipologia === 'Cuccia') {
        $altro = 'dimensioni';
    } elseif ($elemento->tipologia === 'Gioco') {
        $altro = 'peso';
    }

    if (isset($altro)) {
        $prodotti[] = new $elemento->tipologia($elemento->nome, $elemento->prezzo, $elemento->categoria, $elemento->img, $elemento->$altro);
    } else {
        $prodotti[] = new $elemento->tipologia($elemento->nome, $elemento->prezzo, $elemento->categoria, $elemento->img);
    }
    unset($altro);
}
?>