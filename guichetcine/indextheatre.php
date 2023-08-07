<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Quelle sera votre pièce 🤵🏻‍♂️🎭?</h1>
    <form action="indextheatre.php" method="POST">

        <label for="start">Quel jour:</label>
        <input name="date" type="date" id="start" value="2023-06-15" min="2018-01-01" max="2023-08-31">

        Quel emplacement ?
        <input name="place" type="number" id="places" name="places" min="1" max="75">

        <select name="tarif" id="">
            <option value="seance">Place adulte ou enfant</option>
            <option value="enfant" required>Place enfant 4€</option>
            <option value="adulte" required>Place adulte 8€</option>
        </select>

        <select name="piece" id="" placeholder="piece">
            <option value="">Piece</option>
            <option value="Piece 1">Fourberie de scapin</option>
            <option value="Piece 2">De drôles de voisins</option>
            <option value="Piece 3">Depart pour Chinatown</option>
        </select>

        <label for="appt">Pour quelle heure?</label>
        <small>Entre 11h et 21h</small>
        <input name="heurepiece" type="time" id="appt" name="appt" min="11:00" max="21:00" required>
        <input type="text" name="salle" id="">

        <input type="text" name="entracte" id="">
        <input type="submit" value="Confirmer">

    </form>
    <h2>Votre Pièce:</h2>


    <?php

    require_once __DIR__ . "/ticketheatre.php";

    //var_dump($_POST);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $leticket = new Ticketheatre(
            $_POST["date"],
            $_POST["place"],
            $_POST["tarif"],
            $_POST["piece"],
            $_POST["heurepiece"],
            $_POST["entracte"],
        );


        $leticket->reveal();
    }

    ?>
</body>

</html>