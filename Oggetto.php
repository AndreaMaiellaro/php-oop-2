<?php

class Oggetto {
    public $marca;
    public $quantita;
    public $prezzo;

    public function __construct($_marca, $_quantita, $_prezzo) {
        $this->marca = $_marca;
        $this->quantita = $_quantita;
        $this->prezzo = $_prezzo;
    }

    public function getInfoData() {
        return [
            'marca' => $this->marca,
            'quantita' => $this->quantita,
            'prezzo' => $this->prezzo,
        ];
    }
}

?>