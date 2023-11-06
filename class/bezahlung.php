<?php

interface Bezahlung
{
    public function getPreis():float;

    public function html():string;
}