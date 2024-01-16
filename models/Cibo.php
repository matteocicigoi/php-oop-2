<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_categoria, $_img, $_scadenza) {
        parent::__construct($_nome, $_prezzo, $_categoria, $_img);
        $this->scadenza = $_scadenza;
        $this->tipologia = 'Cibo';
    }

    public function getInfo() {
        return 'Scadenza: ' . $this->scadenza;
    }
}
?>