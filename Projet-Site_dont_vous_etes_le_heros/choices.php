<?php
$imageId = "default";


if (isset($_GET["heroName"])) {
    $heroName = $_GET["heroName"];
}

// Premier événement, choix initial
if (
    isset($_GET["heroName"])
    && !isset($_GET["choice"])
    && !isset($_GET["eventNumber"])
) {
    $choiceShortSentence = "Que souhaitez-vous faire face à cette pression, $heroName ?";
    $eventDescription = "Deux semaines avant Noël, l'atelier du Père Noël est en effervescence. Le stress est palpable, car les cadeaux doivent absolument être prêts à temps. 
    <br>Le Père Noël met une pression énorme, exigeant que tout soit parfait sans laisser de place à l'erreur. Vous commencez à vous demander si ce rythme effréné et cette pression 
    constante sont vraiment justes.";
    $eventImage = "assets/img/elf.png";
    $choices = [
        "Vous demandez un entretien avec le Père Noël pour discuter des conditions de travail.",
        "Vous essayez de convaincre les autres lutins de vous réunir pour en discuter"
    ];
    $eventNumber = 1;
    $color = "red";
} else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 1 && isset($_GET["choice"]) && $_GET["choice"] == 0) { // Choix 0 : Demande d'entretien avec le Père Noël
    $choiceShortSentence = "Que faîtes vous?";
    $eventDescription = "Le père Noël vous reçoit. Assis derrière son immense bureau en bois massif, il vous fixe d’un regard glacial.
     Dès que vous commencez à évoquer vos préoccupations, il vous coupe sèchement : 'Les lutins travaillent dur pour la magie de Noël, et cela ne changera pas.' Son ton autoritaire ne laisse place à aucune négociation.
     L’entretien se termine abruptement, vous laissant abasourdi.e face à son refus catégorique d’écouter vos revendications.";
    $eventImage = "assets/img/tower.png";
    $choices = [
        "Vous retournez au turbin, dépité.e",
        "Vous décidez de vous réunir avec les autres lutins"
    ];
    $eventNumber = 2;
    $color = "grey-blue";
} else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 1 && isset($_GET["choice"]) && $_GET["choice"] == 1) {

    header("Location: choices.php?eventNumber=2&choice=1");
    exit;
}

// Gestion de l'événement 2 (réunion avec les lutins)
if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 2 && isset($_GET["choice"]) && $_GET["choice"] == 1) {
    $choiceShortSentence = "Que faîtes-vous maintenant?";
    $eventDescription = "Vous vous réunissez entre lutin⸱e⸱s, vous êtes d'accord pour dire que ce rythme éffrené auquel vous êtes soumi⸱e⸱s est insoutenable, 
    vous décidez de vous mettre en grève et de fonder un syndicat.";
    $eventImage = "assets/img/dragon.png";
    $choices = [
        "Vous faites un feu de joie et dansez autour en chantant l'internationale",
        "Vous montez un piquet de grève et vous vous régalez de merguez dans la joie et la bonne humeur"
    ];
    $eventNumber = 3;
    $color = "green";
}

// Gestion de l'événement 3 page de fin version festive
if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 3 && isset($_GET["choice"])) {
    $imageId = "beer";

    $choiceShortSentence = "¡Viva la revolución!";
    $eventDescription = "L'atmosphère est festive et tout le monde se sent libre, loin du stress du travail.";
    $eventImage = "assets/img/beer.png";
    $choices = [
        "Retourner à l'accueil",
    ];
    $eventNumber = 4;
    $color = "red";
}

// Gestion de l'événement 3 page de fin SUM


else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 2 && isset($_GET["choice"]) && $_GET["choice"] == 0) {

    $choiceShortSentence = "C'est la fin...";
    $eventDescription = "Noël est le bagne";
    $eventImage = "assets/img/portal.png";
    $choices = [
        "Retourner à l'accueil",
    ];
    $eventNumber = 4;
    $color = "dark-blue";
} else if (isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 4 && isset($_GET["choice"]) && $_GET["choice"] == 0) {

    header('Location: index.html');
}

require "templates/choices.phtml";
