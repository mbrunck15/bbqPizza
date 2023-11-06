<?php

class Pizza implements Bezahlung
{
    private bool $groesse;
    private float $basispreis;
    private array $toppings;// [Salami, Pilze, .... ] -> Topping Objekte

    /**
     * @param bool $groesse
     * @param float $basispreis
     * @param array $toppings
     */
    public function __construct(bool $groesse, float $basispreis)
    {
        $this->groesse = $groesse;
        $this->basispreis = $basispreis;

    }


    public function getPreis(): float
    {
        $preis = $this->basispreis;

        foreach ($this->toppings as $topping) { //Salami 1,20 -> getPreis()

            $preis += $topping->getPreis();

        }
        return $preis;

    }

    public function addTopping(Topping ...$topping): void
    {
        foreach ($topping as $item) {
            $this->toppings[] = $item;
        }


    }

    public function html(): string
    {
        if ($this->groesse) {
            $gr = 'gross';
        } else {
            $gr = 'klein';
        }

        $liste = "<ul>";
        foreach ($this->toppings as $topping) {
            $liste .= $topping->html();
        }

        $html = "<div>Pizza {$gr} {$liste} {$this->getPreis()} </div>";
        $html.= "</ul>";
        return $html;
    }
}