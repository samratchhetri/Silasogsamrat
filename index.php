<H1> Formula One Team Car Reveal 2023
    <H2> Presented By 
        <H3> Silas & Samrat
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

</textarea>
        <br>
        <input type="submit">
</form>
<form method="Post">
        <textarea name="sql" placeholder="WRITE SQL CODE HERE!">Haas	January 31	Online</textarea>
        <br>
        <input type="submit">
        </form>


