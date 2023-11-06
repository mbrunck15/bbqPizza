<?php

class Getraenk implements Bezahlung
{


    private string $name;
    private float $preis;

    /**
     * @param string $name
     * @param float $preis
     */
    public function __construct(string $name, float $preis)
    {
        $this->name = $name;
        $this->preis = $preis;
    }


    public function getPreis():float
    {
        return $this->preis;
    }

    public function html(): string
    {
        return "<div>{$this->name} {$this->getPreis()}</div>";
    }
}