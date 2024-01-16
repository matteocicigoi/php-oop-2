<?php

require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto {
    public array $dimensioni;

    public function __construct($_nome, $_prezzo, $_categoria, $_img, array $_dimensioni) {
        parent::__construct($_nome, $_prezzo, $_categoria, $_img);
        $this->dimensioni = $_dimensioni;
        $this->tipologia = 'Cuccia';
    }

    public function getInfo() {
        return 'Dimensioni: ' . implode(' x ', $this->dimensioni);
    }
}
?>