-- Create DB and table f1cars
CREATE DATABASE IF NOT EXISTS myDB;

USE myDB;

CREATE TABLE IF NOT EXISTS f1cars (
    CarID INT AUTO_INCREMENT PRIMARY KEY,
    Team VARCHAR(255) NOT NULL,
    Date VARCHAR(255) NOT NULL,
    Location VARCHAR(255) NOT NULL
);

-- Default data values
INSERT INTO f1Cars (Team, Date, Location)
VALUES
    ('Haas', 'January 31', 'Online'),
    ('Redbull', 'February 03', 'New York'),
    ('Williams', 'February 06', 'Online'),
    ('Alfa Romeo', 'February 07', 'Zurich'),
    ('AlphaTauri', 'February 11', 'New York'),
    ('Aston Martin', 'February 13', 'Silverstone'),
    ('McLaren', 'February 13', 'McLaren T.Centre'),
    ('Ferrari', 'February 14', 'Maranello'),
    ('Mercedes', 'February 15', 'Silverstone'),
    ('Alpine', 'February 16', 'London');
