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
$db = "apen";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}


?>
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">

<div>
    <img src="top_img/monkey-business.jpg" alt="monkey-business">
    <p class="header"> <h1>select your monkey!</h1> </p>
    <img src="top_img/monkey_swings.png" alt="monkey_swings">
</div>

<?php

    echo "<div class='names'> ";

   $sql = "SELECT idleefgebied, omschrijving FROM leefgebied";
   $result = $conn->query($sql);

   if($result->num_rows > 0) {
       // output data each row
       while ($row = $result->fetch_assoc()) {
           echo "<a href='https://www.google.nl/search?q=" . $row["omschrijving"] . "&tbm=isch'>". $row["idleefgebied"] ." - ". $row["omschrijving"] . "</a><br/>";
       }
   } else {
       echo "Results 0";
   }
   $conn->close();

?>
