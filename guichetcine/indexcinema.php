<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de cinema</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Choisissez votre séance 🍿🎟️</h1>
    <form action="indexcinema.php" method="POST">
        <p>

            <label for="start">Quel jour:</label>
            <input name="date" type="date" id="start" value="2023-06-15" min="2018-01-01" max="2023-08-31" required>

            Quel emplacement ?
            <input name="place" type="number" id="places" name="places" min="1" max="75" required>

            <select name="tarif" id="">
                <option value="tarif">Place adulte ou enfant</option>
                <option value="enfant" required>Place enfant 5€</option>
                <option value="adulte" required>Place adulte 10€</option>
            </select>
            <input type="text" name="salle" id="">

            <select name="film" id="" placeholder="film" required>
                <option value="">SÉANCE</option>
                <option name="filmadulte" value="Film salle 1">L'Échelle de Jacob</option>
                <option name="filmadulte" value="Film salle 2">Donnie Darko</option>
                <option name="filmadulte" value="Film salle 3">Le festin nu</option>
                <option name="filmenfant" value="Film enfant salle 4">Fantastic Mr.Fox</option>
                <option name="filmenfant" value="Film enfant salle 5">Pingu</option>

            </select>
            <label for="appt">Pour quelle heure?</label>

            <input name="heurefilm" type="time" id="appt" name="appt" min="10:00" max="22:00" required>
            <small>Entre 10h et 22h</small>
        </p>
        <input value="Confirmer" type="submit">

    </form>




    <?php

    require_once __DIR__ . "/ticketcine.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $leticket = new Ticketcine(
            $_POST["date"],
            $_POST["place"],
            $_POST["tarif"],
            $_POST["heurefilm"],
            $_POST["salle"],
            $_POST["film"],
        );



        $leticket->reveal();
    }
    ?>
</body>

</html>