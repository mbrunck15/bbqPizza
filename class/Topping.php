<?php

class Topping implements Bezahlung
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
        return "<li>{$this->name}</li>";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}