

<?php
require_once __DIR__ . "/ticket.php";


class Ticketcine extends Ticket
{
    //Salle age heure de lay

    protected $heurefilm;
    protected $salle;
    protected $film;

    public function __construct(
        $date,
        $place,
        $tarif,
        $heurefilm,
        $salle,
        $film,


    ) {
        parent::__construct($date, $place, $tarif);
        $this->heurefilm = $heurefilm;
        $this->salle = $salle;
        $this->film = $film;
    }




    public function getHeurefilm()
    {
        return $this->heurefilm;
    }
    public function setHeurefilm($heurefilm)
    {
        $this->heurefilm = $heurefilm;
    }


    public function getSalle()
    {
        return $this->salle;
    }
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }



    public function getFilm()
    {
        return $this->film;
    }
    public function setFilm($film)
    {
        $this->film = $film;
    }

    function reveal()
    {
        parent::reveal();
        echo "<p>" . $this->getHeurefilm() . "</p>";
        echo "<p>" . $this->getSalle() . "</p>";
        echo "<p>" . $this->getFilm() . "</p>";
        echo "<h1>Votre film:</h1>";
        echo '<img src="ticket.jpeg" class="ticket">';
    }
    public function age($film, $filmajeur, $filmenfant)
    {
        if ($film == $this->$filmajeur) {
            echo "<p>Bon visionnage</p>";
        }
        if ($film == $this->$filmenfant) {

            echo "<p>Ce film n'est pas adapté pour un enfant</p>";
        }
    }


    //condition age entrée du film if

    //mettre le tarif uniquement à l'affichage
    //condition choix du film -> quelle salle
}
