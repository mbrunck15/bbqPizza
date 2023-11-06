<?php

class Kunde
{
    private string $vorname;
    private string $nachname;
    private string $plz;
    private string $ort;
    private string $strasse;

    /**
     * @param string $vorname
     * @param string $nachname
     * @param string $plz
     * @param string $ort
     * @param string $strasse
     */
    public function __construct(string $vorname, string $nachname, string $plz, string $ort, string $strasse)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->plz = $plz;
        $this->ort = $ort;
        $this->strasse = $strasse;
    }


    public function bestellung(): Bestellung
    {
        return new Bestellung($this);
    }

    public function getName():string
    {
        return $this->vorname . " ". $this->nachname;
    }






}