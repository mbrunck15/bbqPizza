<?php

class Bestellung
{
    private Kunde $kunde;
    private array $bestellitems;

    /**
     * @param Kunde $kunde
     */
    public function __construct(Kunde $kunde)
    {
        $this->kunde = $kunde;
    }


    public function rechnungHtml():string
    {
        $html = "<div> Name des kundenen {$this->kunde->getName()}</div>";
        foreach ($this->bestellitems as $bestellitem) {
            $html.= $bestellitem->html();
        }
        $html.="Summe: ".$this->rechnungsBetrag()."€";
        return $html;
    }

    public function rechnungsBetrag():float
    {
        $preis = 0;
        foreach ($this->bestellitems as $bestellitem) {
            $preis += $bestellitem->getPreis();
        }
        return $preis;
    }

    public function addBestellitem(Bezahlung $item):void
    {
        $this->bestellitems[]= $item;
    }


}