<?php

class F1CarLister
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function listCars()
    {
        try {
            // Retrieve data from the database
            $stmt = $this->connection->query("SELECT Team, Date, Location FROM f1Cars");
            $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Display data in the HTML table
            foreach ($cars as $car) {
                echo "<tr>";
                echo "<td>{$car['Team']}</td>";
                echo "<td>{$car['Date']}</td>";
                echo "<td>{$car['Location']}</td>";
                echo "</tr>";
            }
        } catch (PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
}
