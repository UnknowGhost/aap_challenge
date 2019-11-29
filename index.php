
<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 13-11-2019
 * Time: 10:26
 * opdr . 6
 */
$servername = "localhost";
$username = "root";
$password = "";

try {
    $dhb = new PDO("mysql:host=$servername;dbname=apen", $username, $password);}
    catch(PDOException $e)
{    echo "Connection failed: " . $e->getMessage() . "<br/>";
    die();
}




$stmt = $dhb->prepare('select * from aap 
JOIN aap_has_leefgebied on aap.idaap = aap_has_leefgebied.idaap
JOIN leefgebied on leefgebied.idleefgebied = aap_has_leefgebied.idleefgebied
order by aap.idaap');
$stmt->execute();
$apen = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">

    <div>
        <img src="top_img/monkey-business.jpg" alt="monkey-business">
        <p class="header"> <h1>select your monkey!</h1> <p>
            <img src="top_img/monkey_swings.png" alt="monkey_swings">
    </div>

    <div class="names">
        <?php include "command.php" ?>
    </div>



<?php

?>