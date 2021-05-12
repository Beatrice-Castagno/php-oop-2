<?php

class Prodotto {
    protected $marca;
    protected $prezzo;
    protected $tipologia;

    public function __construct ($_marca, $_prezzo, $_tipologia) {
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->tipologia = $_tipologia;
    }

    public function getFullInfo()
	{
		return $this->marca . " " . $this->prezzo . "€ ";
	}

}

class InOfferta extends Prodotto {
    protected $sconto = 0;

    public function __construct($_marca, $_prezzo, $_tipologia)
    {
        parent::__construct($_marca, $_prezzo, $_tipologia);
        $this->setSconto();
    }

    public function getSconto() {
        return $this->sconto;
    }

    public function setSconto()
    {
        if($this->tipologia == "shampoo") {
			$this->sconto = 1.0;
		} elseif ($this->tipologia == "balsamo") {
            $this->sconto = 2.0;
        }
    }

}

