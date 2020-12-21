<?php
    $rock = array(
        "titre 1" => "Dominic Strike, Heartbeat",
        "titre 2" => "Cold Hand, 3rd Silhouette",
        "titre 3" => "Forgive Me, Futuristik",
        "titre 4" => "Fight Back, NEEFEX",
        "titre 5" => "Break the Lies, Tigerberry",
    );
    $pop = array(
        "titre 1" => "Horizon, Kasbo",
        "titre 2" => "Say You'll Be There, MØ",
        "titre 3" => "Mittens Is Angry, Virtual Riot",
        "titre 4" => "Infectious, Tobu",
        "titre 5" => "Falling, Enkidu",
        "titre 6" => "Cloud 9, Itro & Tobu",
        "titre 7" => "Hope, Tobu",
        "titre 8" => "Candyland, Tobu",

    );
    $metal = array(
        "titre 1" => "Unitl Your Engine Stops Intermission, TeknoAXE",
        "titre 2" => "Stratospheric Ascenscion, TeknoAXE",
        "titre 3" => "Down to the Last Second, TeknoaAXE",
        "titre 4" => "Wayward Ghouls, TeknoAXE",
        "titre 5" => "Travels Into the Unknown, TeknoAXE",
    );
    $biblio = array(
        "titre 1" => "Dominic Strike, Heartbeat",
        "titre 2" => "Cold Hand, 3rd Silhouette",
        "titre 3" => "Forgive Me, Futuristik",
        "titre 4" => "Fight Back, NEEFEX",
        "titre 5" => "Break the Lies, Tigerberry",
        "titre 6" => "Horizon, Kasbo",
        "titre 7" => "Say You'll Be There, MØ",
        "titre 8" => "Mittens Is Angry, Virtual Riot",
        "titre 9" => "Infectious, Tobu",
        "titre 10" => "Falling, Enkidu",
        "titre 11" => "Cloud 9, Itro & Tobu",
        "titre 12" => "Hope, Tobu",
        "titre 13" => "Candyland, Tobu",
        "titre 14" => "Unitl Your Engine Stops Intermission, TeknoAXE",
        "titre 15" => "Stratospheric Ascenscion, TeknoAXE",
        "titre 16" => "Down to the Last Second, TeknoaAXE",
        "titre 17" => "Wayward Ghouls, TeknoAXE",
        "titre 18" => "Travels Into the Unknown, TeknoAXE",
    )
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Webradio IUT Belfort-Montbeliard</title>
    </head>
    <body> 
    <p>bibliothèque des musiques actuellement disponible sur la radio : </p>
    <?php 
    if (isset ($_GET['recherche'])) {
        if ($_GET['recherche'] === "rock") {
            echo implode("<br>",$rock);
        }
        if ($_GET['recherche'] === "pop") {
            echo implode("<br>",$pop);
        }
        if ($_GET['recherche'] === "metal") {
            echo implode("<br>",$metal);
        }
    }
    else {
        echo implode("<br>", $biblio);
    }

    ?>
    </body>
</html>