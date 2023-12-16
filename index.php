<link rel="stylesheet" href="styles.css"
<H1> Formula One Team Car Reveal 2023
    <H2> Presented By Silas & Samrat
            <H4>Welcome to our Formula One car reveal showcase! Experience the thrill of previous years' unveilings, from iconic venues to pivotal dates in Formula One history. Immerse yourself in the glamour as teams reveal state-of-the-art machines, setting the stage for an adrenaline-fueled season.

Our webpage is your one-stop destination for reliving the excitement, featuring a stunning collection of high-quality images showcasing the sleek designs and innovative features that define each Formula One car. Whether you're a die-hard fan or a casual observer, our gallery promises to leave you awe-struck and hungry for more.

Join us in celebrating the artistry and engineering brilliance behind Formula One's finest. Explore the unveilings that have shaped the sport's landscape and get ready to be captivated by the beauty beneath the covers. Welcome to the Formula One car reveal extravaganza!


<?php
echo `php!!`;

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

try{
$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

}catch (PDOexception $exception){
    echo "database not connected, " , $exception;}
?>

    <form method="Post">
        <textarea name="sql" placeholder="WRITE SQL CODE HERE!">
Team	       Date	        Location
Haas	       January 31	Online
Redbull        Feburary 03      New York
Williams       Feburary 06      Online
Alfa Romeo     Feburary 07      Zurich
AlphaTauri     Feburary 11      New York
Aston Martin   Feburary 13      Silverstone
McLaren        Feburary 13      McLaren Technology Centre
Ferrari        Feburary 14      Maranello
Mercedes       Feburary 15      Silverstone
Alpine         Feburary 16      London

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Webpage Title</title>
</head>
<body>
    <div id="logo-container">
        <img id="logo" src="Silas.jpg.png" alt="Your Logo Description">
    </div>

    <h1>Welcome to My Website</h1>
    
    <?php
        // Your PHP code generating dynamic content goes here
    ?>
</body>
</html>
