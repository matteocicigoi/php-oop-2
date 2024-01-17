<?php
require_once __DIR__ . '/../traits/Nome.php';

class Prodotto {
    use Nome;
    public $prezzo;
    public $categoria;
    public $img;
    public $tipologia = 'Prodotto';

    public function __construct($_nome, $_prezzo, $_categoria, $_img) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        if($_categoria === 'Cani' || $_categoria === 'Gatti'){
            $this->categoria = $_categoria;
        }else{
            throw new Exception('Categoria non valida');
        }
        $this->img = $_img;
    }

    public function getCategoria() {
        if($this->categoria === 'Cani'){
            return '<i class="fa-solid fa-dog"></i>';
        }elseif($this->categoria === 'Gatti'){
            return '<i class="fa-solid fa-cat"></i>';
        }
    }
}