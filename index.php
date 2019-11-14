<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 13-11-2019
 * Time: 10:26
 */

$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

?>
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">

<div>
    <img src="top_img/monkey-business.jpg" alt="monkey-business">
    <p class="header"> <h1>select your monkey!</h1> </p>
    <img src="top_img/monkey_swings.png" alt="monkey_swings">
</div>

<?php

    echo "<div class='names'>";

    foreach ($apen as $aap) {

        echo "<a href='https://www.google.nl/search?q=. $aap .&tbm=isch'> $aap <br/> </a>";
    }


    echo "</div>";

    ?>
