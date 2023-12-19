<?php
// Import f1car.php
require_once 'f1car.php';
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data
        $teamName = $_POST["team_name"];
        $releaseDate = $_POST["release_date"];
        $location = $_POST["reveal_location"];

        // Perform the database insertion
        $stmt = $connection->prepare("INSERT INTO f1cars (Team, Date, Location) VALUES (?, ?, ?)");
        $stmt->execute([$teamName, $releaseDate, $location]);
    }
    // Instantiate the F1CarLister class
    $carLister = new F1CarLister($connection);

} catch (PDOException $exception) {
    echo "Database not connected, " , $exception;
}
?>

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
    <form method="POST" action="">
        <label for="id">E-Mail:</label>
        <input type="text" id="id" name="id" maxlength="30" value="" />

          <label for="pw">Password:</label>
          <input type="text" id="pw" name="pw" maxlength="30" value="" />

          <input type="submit" name="submit" value="Login" />
      </form>
  </div>


<div class="Title">
    <h1>Formula One Team Car Reveal 2023</h1>
    <h2>Presented By Silas & Samrat</h2>
    <p>Explore our Formula One car reveal showcase! Relive the excitement of past unveilings at iconic venues and key dates in F1 history. Immerse yourself in the glamour as teams unveil cutting-edge machines, setting the stage for an adrenaline-fueled season. Our webpage is your one-stop destination for a stunning collection of high-quality images, showcasing sleek designs and innovative features defining each F1 car. Whether you're a die-hard fan or a casual observer, our gallery promises to leave you awe-struck. Join us in celebrating the artistry and engineering brilliance behind Formula One's finest. Explore unveilings that shaped the sport's landscape and get ready to be captivated by the beauty beneath the covers. Welcome to the Formula One car reveal extravaganza!</p>
</div>

<div id="logo-container">
    <!-- ... (your logo content) -->
</div>

<div class="Inputfield">
    <form method="POST" action="">
        <label for="team_name">Team Name:</label>
        <input type="text" id="team_name" name="team_name" maxlength="30" placeholder="" required>

        <label for="release_date">Release Date:</label>
        <input type="text" id="release_date" name="release_date" maxlength="30" placeholder="" required>

        <label for="reveal_location">Location of the Reveal:</label>
        <input type="text" id="reveal_location" name="reveal_location" placeholder="" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>


<div class="table-container">
    <table class="datatable">
        <tr>
            <th>Team</th>
            <th>Date</th>
            <th>Location</th>
        </tr>
        <?php
            // Use the F1CarLister to dynamically append rows to the table
            $carLister->listCars();
            ?>
    </table>
</div>
</body>
</html>
<link rel="stylesheet" href="styles.css">
