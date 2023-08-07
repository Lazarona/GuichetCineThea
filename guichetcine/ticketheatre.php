<?php
require_once __DIR__ . "/ticket.php";

class Ticketheatre extends Ticket
{
    protected string $piece;
    protected string $heurepiece;
    protected int $entracte;

    public function __construct(
        $date,
        $place,
        $tarif,
        $piece,
        $heurepiece,
        $entracte
    ) {
        parent::__construct($date, $place, $tarif);
        //::=je vais dans parent
        $this->piece = $piece;
        $this->heurepiece = $heurepiece;
        $this->entracte = $entracte;
    }



    public function getPiece()
    {
        return $this->piece;
    }
    public function setPiece($piece)
    {
        $this->piece = $piece;
    }



    public function getHeurepiece()
    {
        return $this->heurepiece;
    }
    public function setHeurepiece($heurepiece)
    {
        $this->heurepiece = $heurepiece;
    }


    public function getEntracte()
    {
        return $this->entracte;
    }
    public function setEntracte($entracte)
    {
        $this->entracte = $entracte;
    }

    function reveal()
    {
        parent::reveal();
        echo "<p>" . $this->getPiece() . "</p>";
        echo "<p>" . $this->getHeurepiece() . "</p>";
        echo "<p>" . $this->getEntracte() . "</p>";
    }
}
