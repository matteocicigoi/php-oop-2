<?php

require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto {
    public $peso;

    public function __construct($_nome, $_prezzo, $_categoria, $_img, $_peso) {
        parent::__construct($_nome, $_prezzo, $_categoria, $_img);
        $this->peso = $_peso;
        $this->tipologia = 'Gioco';
    }

    public function getInfo() {
        return 'Peso: ' . $this->peso;
    }
}
?>