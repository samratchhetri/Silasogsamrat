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
echo "Database connected - YAY!";

}catch (PDOexception $exception){
    echo "database not connected, " , $exception;}
?>

    <form method="Post">
        <textarea name="sql" placeholder="WRITE SQL CODE HERE!">Ferrari no good</textarea>
        <br>
        <input type="submit">
</form>

