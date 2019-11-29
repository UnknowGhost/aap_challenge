<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 13-11-2019
 * Time: 10:26
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

if (isset($_GET['soort']));
{
    $stmt = $dhb->prepare('SELECT * FROM aap AS a 
                                 JOIN aap_has_leefgebied AS ahl ON a.idaap = ahl.idaap
                                 JOIN leefgebied AS l ON l.idleefgebied = ahl.idleefgebied
                                 WHERE soort = :soort');
    $stmt->execute([":soort" => $_GET['soort']]);
    $aap = $stmt->fetchALL(PDO::FETCH_ASSOC);
}

?>

<div>
    <form>
        Zoek soort <input type="text" name="soort">
                     <input type="submit" value="zoek">
    </form>
    <h3>Gevonden aap: </h3>
    <ul>
        <?php if ($aap) { ?>
            <li><?= $aap[0] ['soort'] ?></li>
        <ul>
            <?php foreach ($aap as $agb) { ?>
                <li><?= $agb['omschrijving'] ?></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </ul>
</div>



