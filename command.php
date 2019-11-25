<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "apen";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$idsql = "SELECT count(idleefgebied) FROM leefgebied";

$idresult = mysqli_query($conn,$idsql);
$row = mysqli_fetch_row($idresult);
$idcount = $row[0];
$newid = $idcount + 1;

$newarea = $_POST["soort"];

$isql = "INSERT INTO leefgebied (idleefgebied, omschrijving)
VALUES ('$newid', '$newarea')";

if ($conn->query($isql) === TRUE ){
    echo "New area inserted Correctly";
} else {
    echo "Error: " . $idsql . "<br/>" . $conn->error;
    echo "<br/><br/> Retrying<br/><br/>";
    $fixedid = $newid + 1;
}
?>
