<?php
// classi
require_once __DIR__ . '/../models/Prodotto.php';
require_once __DIR__ . '/../models/Cibo.php';
require_once __DIR__ . '/../models/Cuccia.php';
require_once __DIR__ . '/../models/Gioco.php';

//database - verifica se è vuoto
try {
    $database = json_decode(file_get_contents( __DIR__ . '/../database/database.json'));
    if(empty($database)){
        throw new Exception('Il database è vuoto');
    }
} catch(Exception $error) {
    echo $error->getMessage();
    die();
}


//istanze
$prodotti = [];
foreach ($database as $elemento) {
    $add = true;
    // se l'elemento non ha una tipologia valida non lo aggiunge
    try {
        if(!in_array($elemento->tipologia, ['Prodotto', 'Cibo', 'Cuccia', 'Gioco'])){
            throw new Exception('Elemento non disponibile');
        }
    } catch(Exception $error) {
        $add = false;
    }
    if ($elemento->tipologia === 'Cibo') {
        $altro = 'scadenza';
    } elseif ($elemento->tipologia === 'Cuccia') {
        $altro = 'dimensioni';
    } elseif ($elemento->tipologia === 'Gioco') {
        $altro = 'peso';
    }

    if($add === true){
        if (isset($altro)) {
            $prodotti[] = new $elemento->tipologia($elemento->nome, $elemento->prezzo, $elemento->categoria, $elemento->img, $elemento->$altro);
        } else {
            $prodotti[] = new $elemento->tipologia($elemento->nome, $elemento->prezzo, $elemento->categoria, $elemento->img);
        }
    }
    unset($altro);
}
?>