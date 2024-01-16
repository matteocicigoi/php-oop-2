# Esercizio PHP OOP

# Classi

- Prodotto
    - Cibo
    - Cuccia
    - Gioco

# Metodi

- getCategoria
    ``` php
        public function getCategoria() {
            if($this->categoria === 'Cani'){
                return '<i class="fa-solid fa-dog"></i>';
            }elseif($this->categoria === 'Gatti'){
                return '<i class="fa-solid fa-cat"></i>';
            }
        }
    ```
- getInfo
    ``` php
        public function getInfo() {
            return 'Peso: ' . $this->peso;
        }
    ```