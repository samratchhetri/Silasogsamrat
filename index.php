Hello World
<?php
echo `php!!`;

$servername = "localhost";
$username = "root";
$password = "root";
$database = "myDB";

try{
$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
echo "Database connected - YAY!";

}catch (PDOexception $exception){
    echo "database not connected, " , $exception;}
