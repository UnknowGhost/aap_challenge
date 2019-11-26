<?php

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

echo "<ul>";
        foreach ($apen as $aap) { ?>
            <li><?= $aap['soort']; ?> : <?= $aap['omschrijving']; ?></li>
            <?php } ?>
        </ul>