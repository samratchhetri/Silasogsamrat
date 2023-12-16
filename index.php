<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Webpage Title</title>
</head>
<body>
<div class="navbar">
    <form>
<label>E-Mail:</label>
<input type="text" name="id" maxlength="30" value="" />
<label>Password:</label> 
<input type="text" name="pw" maxlength="30" value="" />

<input type="submit" name="submit" value="Login" />
</form>
</div>

<div class="Title">
       <H1> Formula One Team Car Reveal 2023  
        <H2> Presented By Silas & Samrat    
            <P>Explore our Formula One car reveal showcase! Relive the excitement of past unveilings at iconic venues and key dates in F1 history. Immerse yourself in the glamour as teams unveil cutting-edge machines, setting the stage for an adrenaline-fueled season. Our webpage is your one-stop destination for a stunning collection of high-quality images, showcasing sleek designs and innovative features defining each F1 car. Whether you're a die-hard fan or a casual observer, our gallery promises to leave you awe-struck. Join us in celebrating the artistry and engineering brilliance behind Formula One's finest. Explore unveilings that shaped the sport's landscape and get ready to be captivated by the beauty beneath the covers. Welcome to the Formula One car reveal extravaganza!"

    </div>
            
    <div id="logo-container">
       
    </div>
    
    <?php
        // Your PHP code generating dynamic content goes here
    ?>
<div class="Inputfield">
<form>
<label for="fname">Team Name:</label>
<input type="text" name="id" maxlength="30" placeholder="" />
<label for="lname">Relaease Date:</label>
<input type="text" name="pw" maxlength="30" placeholder="" />
<label for="fname">Location of the Reveal:</label>
<input type="text" id="fname" name="fname"placeholder="">
<input type="submit">

</form>
</div>
<div class="table-container">
  <table class="datatable">
    <tr>
      <th>Team</th>
      <th>Date</th>
      <th>Location</th>
    </tr>
    <tr>
      <td>Haas</td>
      <td>January 31</td>
      <td>Online</td>
    </tr>
    <tr>
      <td>Redbull</td>
      <td>Feburary 03</td>
      <td>New York</td>
    </tr>
    <tr>
      <td>Williams</td>
      <td>Feburary 06</td>
      <td>Online</td>
    </tr>
    <tr>
      <td>Alfa Romeo</td>
      <td>Feburary 07</td>
      <td>Zurich</td>
    </tr>
    <tr>
      <td>AlphaTauri</td>
      <td>Feburary 11</td>
      <td>New York</td>
    </tr>
    <tr>
      <td>Aston Martin</td>
      <td>Feburary 13</td>
      <td>Silverstone</td>
    </tr>
    <tr>
      <td>McLaren</td>
      <td>Feburary 13</td>
      <td>McLaren T.Centre</td>
    </tr>
    <tr>
      <td>Ferrari</td>
      <td>Feburary 14</td>
      <td>Maranello</td>
    </tr>
    <tr>
      <td>Mercedes</td>
      <td>Feburary 15</td>
      <td>Silverstone</td>
    </tr>
    <tr>
      <td>Alpine</td>
      <td>Feburary 16</td>
      <td>London</td>
    </tr>
  </table>
</div>
</body>
</html>
<link rel="stylesheet" href="styles.css"
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

