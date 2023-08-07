<?php

abstract class Ticket
{
    protected string $date;
    protected string $place;
    protected string $tarif; //donnde rpix

    public function __construct($date, $place, $tarif)
    {
        $this->date = $date;
        $this->place = $place;
        $this->tarif = $tarif;
    }

    public function reveal()
    {
        echo "<p>" . $this->date . "</p>";
        echo "<p>" . $this->place . "</p>";
        echo "<p>" . $this->tarif . "</p>";
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getPlace()
    {
        return $this->place; //return on renvoi avec le get
    }
    public function setPlace($place)
    {
        $this->place = $place;
    }


    public function getTarif()
    {
        $tarif = $this->tarif;
        return $tarif . "€";
    }
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }
}
//SET..
//AUTRE SEANCE NEW PAGE
//THEATRE NEW PAGE
